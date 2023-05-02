<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Arizonia|Lobster|Lobster+Two|Source+Sans+Pro&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Pacifico&family=Yellowtail&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Heebo&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
  
</head>

<body style="background:white;">

        <main class="py-4"> 
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
           @yield('content')
        <main>
   

    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/loader.js')}}"></script>
    <script src="{{asset('js/JavaScript.js')}}"></script>
   
    </body>
</html>