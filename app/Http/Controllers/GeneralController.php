<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GeneralController extends Controller
{
    public function Homepage()
    {
        return view('index');
    }

    public function Contact()
    {
        return redirect(route('index') . "#contact");
    }

    public function Certificate() {
        return view('pdf.certificate');
    }

    public function ContactSubmission()
    {
        $validated = request()->validate([
            "name" => ['required', 'max:100'],
            "email" => ['required', 'max:100'],
            'subject' => ['required', 'max:255'],
            'message' => ['required', 'max:5000'],
            'g-recaptcha-response' => ['recaptcha', 'required'],
        ]);

        Mail::to('daan@daanhendriks.nl')->send(new ContactFormMail($validated));

        return redirect(route('index'));
    }

    public function Dashboard()
    {
        $courseUnlocks = Auth()->User()->CourseUnlocks();

        return view('dashboard', [
            'courseUnlocks' => $courseUnlocks,
        ]);
    }

    public function changeLocale(string $locale)
    {
        if ($locale == 'en' || $locale == 'nl') {
            Session::put('locale', $locale);
        }
        return back();
    }

    public function changeTheme(string $theme) {
        if ($theme == 'darkTheme' || $theme == 'lightTheme') {
            Session::put('theme', $theme);
        }
        return back();
    }
}
