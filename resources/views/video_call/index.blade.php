@extends('layouts.app')

@section('title', 'Page Title')

@section('style')
@endsection

@section('script')
    <script src="https://requirejs.org/docs/release/2.3.6/minified/require.js"></script>
    <script src="//media.twiliocdn.com/sdk/js/video/releases/2.8.0/twilio-video.min.js"></script>
    <script>
        const { connect } = require('twilio-video');
        // requirejs(['twilio-video'], function(connect) {
            connect('{{ $token }}', { name:'my-new-room' })
            .then(room => {
                console.log(`Successfully joined a Room: ${room}`);
                room.on('participantConnected', participant => {
                    console.log(`A remote Participant connected: ${participant}`);
                });
            }, error => {
                console.error(`Unable to connect to Room: ${error.message}`);
            });
        // });
    </script>
@endsection

@section('content')
    <p>Twilio Token: {{ $token }}</p>
@endsection
