@extends('layout.homeLayout')
@section('content')


<body background="{{asset('/images/wall0.png')}}" style="width:98.67%;">
<div class="container">
  <div class="row">
    <div class="col-lg-3 ">
      <a href="{{route('pilihJadwal.choose')}}">
        <img src="{{asset('/images/crumpledpaper2.jpg')}}" style="width:300px;height:400px; position:relative;border-radius:20px"  >
      </a>
    </div>
    <div class="col-lg-3">
      <a href="{{url('jadwals/1')}}">
        <img src="{{asset('/images/crumpledpaper1.jpg')}}" style="width:300px;height:400px; position:relative;border-radius:20px"  >
      </a>
    </div>
    <div class="col-lg-3">
      <a href="{{route('notif')}}">
        <img src="{{asset('/images/crumpledpaper3 .jpg')}}" style="width:300px;height:400px; position:relative;border-radius:20px"  >
      </a>
    </div>

  </div>

</div>
  </div>
</div>





</body>


@endsection