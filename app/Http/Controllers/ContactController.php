<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use GoogleMaps\GoogleMaps;

## or
use SEO;

class ContactController extends Controller {

    public function index() {
        SEO::setTitle('Contact Us');
        SEO::setDescription('Contact to Owner');
        SEO::opengraph()->setUrl(url('contact_us'));
        SEO::opengraph()->addProperty('type', 'contact us');
//        $response = \GoogleMaps::load('geocoding')
//                ->setParamByKey('latlng', '40.714224,-73.961452') 
//                 ->get('results.formatted_address');
//        echo "<pre>";
//        print_r($response);
//        exit;
        return view('contact_us');
    }

    public function store(Request $request) {
        $contacts['name'] = $request->get('name');
        $contacts['email'] = $request->get('email');
        $contacts['msg'] = $request->get('msg');

        Mail::send('emails.contact', $contacts, function($message) {
            $message->to('mallikarjun266@gmail.com', $contacts['name'])->subject($contacts['msg']);
        });
        return redirect()->route('contact.create');
    }

}
