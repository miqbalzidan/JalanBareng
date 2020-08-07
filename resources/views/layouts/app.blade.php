<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- resources/views/layouts/app.blade.php -->

    <style>
    html{
            background:url('Slide2.jpg') no-repeat center center fixed;
            -webkit-background-size:cover;
            -moz-background-size:cover;
            -o-background-size:cover;
            background-size:cover;
    }
        .chat {
        list-style: none;
        margin: 0;
        padding: 0;
        }
    
        .chat li {
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #B3A9A9;
        }
    
        .chat li .chat-body p {
        margin: 0;
        color: #777777;
        }
    
        .panel-body {
        overflow-y: scroll;
        height: 350px;
        }
    
        ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
        }
    
        ::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
        }
    
        ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;

        <style type="text/css">
        body {
            padding-top: 5rem;            /* Provide Space from Top */
            background: #942626;          /* Set background color for body to justify transparency of Jumbotron */
        }

        .jumbotron {
            background: none;             /* Transparent background */
        }

        }
  </style>
</head>
<body>
  
        @include('inc.navbar')
        <main class="py-4">
            @include('inc.messages')
            @yield('content')
        </main>
    
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>


</body>
</html>
