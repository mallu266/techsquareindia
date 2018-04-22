<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class IndustrialController extends Controller {

    public function index() {
        SEO::setTitle('Industrial');
        SEO::setDescription('Defence Products, Industrial');
        SEO::opengraph()->setUrl(url('industrial'));
        SEO::opengraph()->addProperty('type', 'industrial');
        return view('industrial');
    }

}
