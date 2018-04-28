<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class DefenceController extends Controller
{
    public function index(){
        SEO::setTitle('Defence');
        SEO::setDescription('Defence Products, Cefence');
        SEO::opengraph()->setUrl(url('commercial'));
        SEO::opengraph()->addProperty('type', 'commercial');
        return view('defence');
    }
}
