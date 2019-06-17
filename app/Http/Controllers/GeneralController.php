<?php

namespace App\Http\Controllers;

use App\courses;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Session;
use Mail;

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

    public function Sandbox()
    {
        return view('sandbox');
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
        $data = ["success" => " false"];
        if ($theme == 'darkTheme' || $theme == 'lightTheme') {
            Session::put('theme', $theme);
            $data["success"] = true;
            $data["theme"] = $theme;
        }
        return $data;
    }
}
