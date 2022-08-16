<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactview() {
        return view('pages.Contact.contact_us');
    }
}
