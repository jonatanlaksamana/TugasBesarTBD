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
            @for ($i = 0; $i < sizeof($jadwalTidakBentrok); $i++)
            <tr>
                <th scope="row">{{$jadwalTidakBentrok[$i]->id}}</th>
                <td>{{$jadwalTidakBentrok[$i]->name}}</td>
                <td>{{$jadwalTidakBentrok[$i]->kelas}}</td>
                <td>{{$jadwalTidakBentrok[$i]->tipe}}</td>
                <td>{{$jadwalTidakBentrok[$i]->hari}}</td>
                <td>{{$jadwalTidakBentrok[$i]->waktuMulai}}</td>
                <td>{{$jadwalTidakBentrok[$i]->waktuSelesai}}</td>
              </tr>
      
      
              @endfor
            </tbody>
      </table>

      <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Konfirmasi Jadwal</a>
      <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Pilih Ulang Mata Kuliah</a>
</body>
</html>

@endsection