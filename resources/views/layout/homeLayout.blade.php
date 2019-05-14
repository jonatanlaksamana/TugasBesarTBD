<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/home.css')}}"> 
    <link rel="stylesheet" href="{{asset('/css/HeaderStyle2.css')}}">
    <link rel="stylesheet" href="{{asset('/css/headerStyle2.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>


    @include('content/header')

    @yield('content')
</body>
</html>