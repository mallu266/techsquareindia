<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
## or
use SEO;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller {

    public function index() {
        SEO::setTitle('About Us');
        SEO::setDescription('About Techsquareindia');
        SEO::opengraph()->setUrl(url('aboutus'));
        SEO::opengraph()->addProperty('type', 'about us');
        
        $response = DB::table('about_us')->select('id', 'about_us')
                ->first();
        return view('about_us',['response'=>$response]);
    }

}
