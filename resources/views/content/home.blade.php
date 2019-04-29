@extends('layout.homeLayout')
@section('content')
<html>


<body background="{{asset('/images/multicol.jpg')}}" >

<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="{{asset('/images/crumpledpaper.jpg')}}" style="width:200px;height:200px; position:relative;"  >
      <p style="position: absolute;">Pilih Jadwal</p>
      
    </div>
    <div class="flip-card-back">
      
      <p>Memilih jadwal mengajar.</p>
    </div>
  </div>
</div>

<div class="flip-card" >
  <div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="{{asset('/images/crumpledpaper.jpg')}}" style="width:200px;height:200px; position:relative;"  >
            <p>Seluruh Jadwal</p>
    </div>
    <div class="flip-card-back">
      
      <p>Menapilkan seluruh jadwal mengajar.</p>
    </div>
  </div>
</div>

<div class="flip-card" >
        <div class="flip-card-inner">
          <div class="flip-card-front">
          <img src="{{asset('/images/crumpledpaper.jpg')}}" style="width:200px;height:200px; position:relative;"  >
                <p>Ganti Jadwal</p>
          </div>
          <div class="flip-card-back">
           
            <p>Mengganti jadwal untuk kelas pengganti.</p>
          </div>
        </div>
      </div>

</body>
</html>

@endsection
