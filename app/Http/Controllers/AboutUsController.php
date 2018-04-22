<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
## or
use SEO;

class AboutUsController extends Controller {

    public function index() {
        SEO::setTitle('About Us');
        SEO::setDescription('About Techsquareindia');
        SEO::opengraph()->setUrl(url('about_us'));
        SEO::opengraph()->addProperty('type', 'about us');
        return view('about_us');
    }

}
