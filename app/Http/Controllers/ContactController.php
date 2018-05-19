<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use GoogleMaps\GoogleMaps;
use App\Mail\ContactUs;

## or
use SEO;

class ContactController extends Controller {

    public function email() {
//        Mail::send('emails.contact', array(
//            'name' => 'Mallikarjun',
//            'email' => 'mallikarjun@appmocx.com',
//            'msg' => 'This is test message'
//                ), function($message) {
//            $message->from('mallikarjun@appmocx.com');
//            $message->to('mallikarjun266@gmail.com', 'Admin')->subject('Cloudways Feedback');
//        });

        Mail::send(new ContactUs());
    }

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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required',
        ]);
        Mail::send(new ContactUs());
        if (Mail::failures()) {
            return back()->with('error', "Email Did't Sent");
        }
        return back()->with('success', "Email Sent");
    }

}
