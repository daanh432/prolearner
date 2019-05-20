<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function Homepage(){
        return view('index');
    }

    public function Contact() {
        return redirect(route('index') . "#contact");
    }

    public function ContactSubmission(){
        return redirect(route('index'));
    }
}
