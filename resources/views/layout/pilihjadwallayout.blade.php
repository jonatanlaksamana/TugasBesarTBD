<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="{{asset('/css/pilihjadwal.css')}}"> -->
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <link rel="stylesheet" href="{{asset('/css/headerStyle2.css')}}"> 
    <link rel="stylesheet" href="{{asset('/bootstrap/dist/css/bootstrap.css')}}">
</head>
<body>

    @include('content/header2')
    @yield('content')






<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="{{asset('/bootstrap/dist/js/bootstrap.js')}}"></script>
        
</body>
</html>