<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
use Illuminate\Support\Facades\DB;

class TechsquareIndia extends Controller {

    public function index() {
        SEO::setTitle('Techsquareindia');
        SEO::setDescription('techsquare, techsquareindia,digital mono');
        SEO::opengraph()->setUrl(url('/'));
        SEO::opengraph()->addProperty('type', 'techsquare');
        $response = DB::table('slides')->select('id', 'slide', 'title')->get();
        $thumbnails = DB::table('thumbnails')->select('id', 'description', 'title', 'image')->get();
        $description = DB::table('main_pages')->select('id', 'default')
                ->first();
//        return view('underconstruction');
        return view('welcome', ['response' => $response, 'thumbnails' => $thumbnails, 'description' => $description]);
    }

    public function resources($type, $id) {
        $response = DB::table('resources')->where('product_id', $type)->where('id', $id)->first();
        return view('resources', ['response' => $response]);
    }

}
