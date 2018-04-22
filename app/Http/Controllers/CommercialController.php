<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class CommercialController extends Controller {

    public function index() {
        SEO::setTitle('Commercial');
        SEO::setDescription('Commercial Products, Commercial');
        SEO::opengraph()->setUrl(url('commercial'));
        SEO::opengraph()->addProperty('type', 'commercial');
        return view('commercial');
    }

}
