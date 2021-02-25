<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/favicon/favicon-16x16.png') }}">

    <title>Vue SPA Demo</title>

    <style>
        .card-video-call .card-body .media-wraper{
            position: relative;
            display: block;
            width: 100%;
            max-width: 960px;
            min-height: 400px;
            border: 1px solid #cccccc;
            margin: auto;
            vertical-align: top;
        }
        #local-media-div{
            display: inline-block;
            position: relative;
            min-width: 200px;
            min-height: 200px;
            border: 1px solid #cccccc;
            top: -200px;
        }
        #local-media-div video{
            width: 200px;
        }
        #remote-media-div{
            display: inline-block;
            position: relative;
            min-width: 640px;
            min-height: 400px;
            border: 1px solid #cccccc;
        }
        #remote-media-div video{
            width: 640px;
        }
    </style>
</head>
<body>
    <div id="app">
        {{-- <example-component></example-component> --}}
        <app></app>
    </div>

    <script>
        var $TOKEN = "{{ $token }}";
        var $ROOM = "{{ $room_name }}";
    </script>
    <script src="{{ mix('js/vue_app.js') }}"></script>
</body>
</html>
