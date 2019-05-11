@extends('layout.homeLayout')
@section('content')
<html>


<body background="{{asset('/images/wall0.png')}}" style="width:98.67%;">

<div class="flip-card" style="border-radius:20px">
  <div class="flip-card-inner" style="border-radius:20px">
    <div class="flip-card-front" style="border-radius:20px">
    <img src="{{asset('/images/crumpledpaper2.jpg')}}" style="width:300px;height:400px; position:relative;border-radius:20px"  >
      
      
    </div>
    <div class="flip-card-back" style="border-radius:20px">
     
      <p>Memilih jadwal mengajar.</p>
      <a href="{{url('pilihjadwal')}}">
      <img src="{{asset('/images/scheduleStample.png')}}" style="width:200px;height:200px; position:relative;border-radius:150px"  >
      </a>
    </div>
  </div>
</div>

<div class="flip-card" style="border-radius:20px">
  <div class="flip-card-inner" style="border-radius:20px">
    <div class="flip-card-front" style="border-radius:20px">
    
      <img src="{{asset('/images/crumpledpaper1.jpg')}}" style="width:300px;height:400px; position:relative;border-radius:20px"  >
    
      
      
    </div>
    

    <div class="flip-card-back" style="border-radius:20px">
    <p>Menapilkan seluruh jadwal mengajar.</p>
    <a href="{{url('jadwals/1')}}">
    <img src="{{asset('/images/scheduleStample.png')}}" style="width:200px;height:200px; position:relative;border-radius:150px"  >
    </a>
    </div>
    
  </div>
</div>

<div class="flip-card" >
        <div class="flip-card-inner" style="border-radius:20px">
          <div class="flip-card-front" style="border-radius:20px">
          <img src="{{asset('/images/crumpledpaper3 .jpg')}}" style="width:300px;height:400px; position:relative;border-radius:20px"  >
                <p>Jadwal Saya</p>
          </div>
          <div class="flip-card-back" style="border-radius:20px">
            <p>Melihat atau Mengganti jadwal untuk kelas pengganti.</p>
            <a href="{{url('scheduleSaya')}}">
            <img src="{{asset('/images/scheduleStample.png')}}" style="width:200px;height:200px; position:relative;border-radius:150px"  >
            </a>
          </div>
        </div>
      </div>

</body>
</html>

@endsection
