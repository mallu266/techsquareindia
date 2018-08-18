<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
use Illuminate\Support\Facades\DB;

class TechsquareIndia extends Controller {

    public function construction() {
        $server_name = $_SERVER['SERVER_NAME'];
        $crediantials = DB::table('crediantials')->select('live')->first();
        if (($server_name == '127.0.0.1' || $server_name == 'techsquareindia.com') && @$crediantials->live == 0) {
             return view('underconstruction');
        } else {
            return redirect('/');
        }
    }

    public function index() {
        SEO::setTitle('Techsquareindia');
        SEO::setDescription('techsquare, techsquareindia,digital mono, digital water level controller');
        SEO::opengraph()->setUrl(url('/'));
        SEO::opengraph()->addProperty('type', 'techsquare');
        $response = DB::table('slides')->get();
        $thumbnails = DB::table('thumbnails')->get();
        $description = DB::table('main_pages')->select('id', 'default')
                ->first();
        return view('welcome', ['response' => $response, 'thumbnails' => $thumbnails, 'description' => $description]);
    }

    public function resources($type, $id) {
        $response = DB::table('resources')->where('product_id', $type)->where('id', $id)->first();
        return view('resources', ['response' => $response]);
    }

}
