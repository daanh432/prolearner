@extends('layouts.app')

@section('title', 'Feedback overview')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 containerBackground br-20 secondaryText my-5 py-4">
                <h1>Feedback overview</h1>
                <div class="mt-md-3">
                @foreach($feedbackOverviews as $feedbackOverview)
                    <div class="media border p-3">
                        <div class="media-body">
                            <small><i>{{ $feedbackOverview->created_at->format('H:i:s d-m-Y') }}</i></small>
                            <p>{{ $feedbackOverview->comment }}</p>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection