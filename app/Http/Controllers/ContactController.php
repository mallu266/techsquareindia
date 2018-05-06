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

    public function email() {
        Mail::send('emails.contact', array(
            'name' => 'Mallikarjun',
            'email' => 'mallikarjun@appmocx.com',
            'msg' => 'This is test message'
                ), function($message) {
            $message->from('mallikarjun@appmocx.com');
            $message->to('mallikarjun266@gmail.com', 'Admin')->subject('Cloudways Feedback');
        });
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
        $data['name'] = $request->get('name');
        $data['email'] = $request->get('email');
        $data['msg'] = $request->get('msg');

        Mail::send('emails.contact', $data, function ($message) {
            $message->from('arjun@gmail.com', 'Laravel');

            $message->to('mallikarjun266@gmail.com')->cc('mallikarjun@appmocx.com');
        });



        return redirect()->route('contact.create');
    }

}
