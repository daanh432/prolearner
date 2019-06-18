@component('mail::message')
    # Contact form submission

    You received a message on https://prolearner.daanhendriks.nl/.

    First name: {{ $submission->name }}
    Email address: {{ $submission->email }}
    Subject: {{ $submission->subject }}
    Message:
    {{ $submission->message }}

    @component('mail::button', ['url' => 'mailto:' . $submission->email ])
        Respond to message
    @endcomponent

    Kind regards,
    {{ config('app.name') }}
@endcomponent
