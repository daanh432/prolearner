@component('mail::message')
# Contact form submission

You received a message on https://prolearner.daanhendriks.nl/.

First name: {{ $submission->name }}<br>
Email address: {{ $submission->email }}<br>
Subject: {{ $submission->subject }}<br>
Message:<br>
{{ $submission->message }}

@component('mail::button', ['url' => 'mailto:' . $submission->emailAddress ])
Respond to message
@endcomponent

Kind regards,<br>
{{ config('app.name') }}
@endcomponent
