<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="{{asset('/css/main.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('/css/util.css')}}"> -->
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/button.css')}}">
    <link rel="stylesheet" href="{{asset('/css/headerStyle3.css')}}"> 
    <title>Jadwal Mengajar</title>

    
</head>
<body>
    @include('content/header')
    @yield('content')

    <script src="{{asset('js/util.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>