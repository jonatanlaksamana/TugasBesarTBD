@extends('layout.confirmPilihanLayout')
@section('content')
<body background="{{asset('/images/wall3.png')}}" style="width:99.3%">

  <table class="table table-bordered table-dark" style="width:97%;margin-left:1.9%;">
      <thead>
          <td colspan="7" style="text-align: center;font-weight:bold;">Bentrok</td>
        <tr>
          <th scope="col" style="width:5%">No</th>
          <th scope="col">Matakuliah</th>
          <th scope="col" style="width:20%">kelas</th>
          <th scope="col" style="width:20%">tipe</th>
          <th scope="col" style="width:20%">hari</th>
          <th scope="col" style="width:20%">waktuMulai</th>
          <th scope="col" style="width:20%">waktuSelesai</th>
        </tr>
      </thead>
      <tbody>
      @for ($i = 0; $i < sizeof($jadwalBentrok); $i++)
      <tr>
          <th scope="row">{{$jadwalBentrok[$i]->id}}</th>
          <td>{{$jadwalBentrok[$i]->name}}</td>
          <td>{{$jadwalBentrok[$i]->kelas}}</td>
          <td>{{$jadwalBentrok[$i]->tipe}}</td>
          <td>{{$jadwalBentrok[$i]->hari}}</td>
          <td>{{$jadwalBentrok[$i]->waktuMulai}}</td>
          <td>{{$jadwalBentrok[$i]->waktuSelesai}}</td>
        </tr>


        @endfor
      </tbody>
    </table>

    <table class="table table-bordered table-dark" style="width:97%;margin-left:1.9%;">
        <thead>
            <td colspan="7" style="text-align: center;font-weight:bold;">Jadwal Mengajar</td>
          <tr>
            <th scope="col" style="width:5%">No</th>
            <th scope="col">Matakuliah</th>
            <th scope="col" style="width:20%">kelas</th>
            <th scope="col" style="width:20%">tipe</th>
            <th scope="col" style="width:20%">hari</th>
            <th scope="col" style="width:20%">waktuMulai</th>
            <th scope="col" style="width:20%">waktuSelesai</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>PBO</td>
            <td>A</td>
            <td>Kelas</td>
            <td>Senin</td>
            <td>07:00:00</td>
            <td>09:00:00</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>DAA</td>
            <td>A</td>
            <td>Kelas</td>
            <td>Selasa</td>
            <td>07:00:00</td>
            <td>09:00:00</td>
          </tr>
        </tbody>
      </table>

      <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Konfirmasi Jadwal</a>
      <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Pilih Ulang Mata Kuliah</a>
</body>
</html>

@endsection