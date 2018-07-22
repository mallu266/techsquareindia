<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
use Illuminate\Support\Facades\DB;

class TechsquareIndia extends Controller {

    public function construction() {
        $crediantials = DB::table('crediantials')->select('live')->first();
        if (($_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'techsquareindia.com') && $crediantials->live == 0) {
            return view('underconstruction');
        } else {
            return redirect('/');
        }
    }

    public function index() {
        SEO::setTitle('Techsquareindia');
        SEO::setDescription('techsquare, techsquareindia,digital mono');
        SEO::opengraph()->setUrl(url('/'));
        SEO::opengraph()->addProperty('type', 'techsquare');
        $response = DB::table('slides')->get();
        $thumbnails = DB::table('thumbnails')->get();
        $description = DB::table('main_pages')->select('id', 'default')
                ->first();
        if ($_SERVER['SERVER_NAME'] == 'demo.techsquareindia.com' || $_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'techsquare.test') {
            return view('welcome', ['response' => $response, 'thumbnails' => $thumbnails, 'description' => $description]);
        } else {
            return view('underconstruction');
        }
        //return view('underconstruction');
    }

    public function resources($type, $id) {
        $response = DB::table('resources')->where('product_id', $type)->where('id', $id)->first();
        return view('resources', ['response' => $response]);
    }

}
