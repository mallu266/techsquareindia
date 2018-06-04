<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class TechsquareIndia extends Controller {

    public function index() {
        SEO::setTitle('Techsquareindia');
        SEO::setDescription('techsquare, techsquareindia,digital mono');
        SEO::opengraph()->setUrl(url('/'));
        SEO::opengraph()->addProperty('type', 'techsquare');
        return view('underconstruction');
//        return view('welcome');
    }

}
