@extends('layout.homeLayout')
@section('content')
<html>


<body background="{{asset('/images/multicol.jpg')}}" style="width:98.67%">

<div class="flip-card" style="border-radius:20px">
  <div class="flip-card-inner" style="border-radius:20px">
    <div class="flip-card-front" style="border-radius:20px">
    <img src="{{asset('/images/crumpledpaper.jpg')}}" style="width:200px;height:200px; position:relative;border-radius:20px"  >
      <p style="position: absolute;">Pilih Jadwal</p>
      
    </div>
    <div class="flip-card-back" style="border-radius:20px">
      
      <p>Memilih jadwal mengajar.</p>
    </div>
  </div>
</div>

<div class="flip-card" style="border-radius:20px">
  <div class="flip-card-inner" style="border-radius:20px">
    <div class="flip-card-front" style="border-radius:20px">
    
      <img src="{{asset('/images/crumpledpaper.jpg')}}" style="width:200px;height:200px; position:relative;border-radius:20px"  >
    
      <p>Seluruh Jadwal</p>
      
    </div>
    <div class="flip-card-back" style="border-radius:20px">
        <a href="{{url('jadwals/1')}}">
      <p>Menapilkan seluruh jadwal mengajar.</p>
    </a>
    </div>
  </div>
</div>

<div class="flip-card" >
        <div class="flip-card-inner" style="border-radius:20px">
          <div class="flip-card-front" style="border-radius:20px">
          <img src="{{asset('/images/crumpledpaper.jpg')}}" style="width:200px;height:200px; position:relative;border-radius:20px"  >
                <p>Ganti Jadwal</p>
          </div>
          <div class="flip-card-back" style="border-radius:20px">
           
            <p>Mengganti jadwal untuk kelas pengganti.</p>
          </div>
        </div>
      </div>

</body>
</html>

@endsection