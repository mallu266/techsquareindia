<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use GoogleMaps\GoogleMaps;
use App\Mail\ContactUs;
use Exception;

## or
use SEO;

class ContactController extends Controller {

    public function index() {
        SEO::setTitle('Contact Us');
        SEO::setDescription('Contact to Owner');
        SEO::opengraph()->setUrl(url('contact_us'));
        SEO::opengraph()->addProperty('type', 'contact us');
        return view('contact_us');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required',
        ]);
        try {
            Mail::send(new ContactUs());
            if (Mail::failures()) {
                return back()->with('error', "Email Did't Sent");
            }
        } catch (Exception $ex) {
            return back()->with('error', "Message did't send.")->with('servererror', $ex->getMessage());
        }
        return back()->with('success', "Email Sent");
    }

}
