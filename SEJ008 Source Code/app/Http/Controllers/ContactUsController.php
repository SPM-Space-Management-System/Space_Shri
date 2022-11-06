<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends ParentController
{
    public function contactview() {
        return view('pages.Contact.contact_us');
    }
}
