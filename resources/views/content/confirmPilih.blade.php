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
          <td>
            @if($jadwalBentrok[$i]->tipe == 0)
              Kelas
            @elseif($jadwalBentrok[$i]->tipe == 1)
              Praktikum
            @endif
          </td>
          <td>
            @if($jadwalBentrok[$i]->hari == 1)
                Senin
            @elseif($jadwalBentrok[$i]->hari == 2)
                Selasa
            @elseif($jadwalBentrok[$i]->hari == 3)
                Rabu
            @elseif($jadwalBentrok[$i]->hari == 4)
                Kamis
            @elseif($jadwalBentrok[$i]->hari == 5)
                Jumat
            @endif
            {{-- {{$jadwalBentrok[$i]->hari}} --}}
          </td>
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
                <td>@if($jadwalTidakBentrok[$i]->tipe == 0)
                    Kelas
                  @elseif($jadwalTidakBentrok[$i]->tipe == 1)
                    Praktikum
                  @endif</td>
                <td> @if($jadwalTidakBentrok[$i]->hari == 1)
                    Senin
                @elseif($jadwalTidakBentrok[$i]->hari == 2)
                    Selasa
                @elseif($jadwalTidakBentrok[$i]->hari == 3)
                    Rabu
                @elseif($jadwalTidakBentrok[$i]->hari == 4)
                    Kamis
                @elseif($jadwalTidakBentrok[$i]->hari == 5)
                    Jumat
                @endif
                {{-- {{$jadwalBentrok[$i]->hari}} --}}</td>
                <td>{{$jadwalTidakBentrok[$i]->waktuMulai}}</td>
                <td>{{$jadwalTidakBentrok[$i]->waktuSelesai}}</td>
              </tr>
      
      
              @endfor
            </tbody>
      </table>
    <form action="{{route('isi.Jadwal')}}" method="POST">
      @csrf

        @if(sizeof($jadwalBentrok) == 0 )
          <input type="submit" class="btn btn-primary btn-lg active"  aria-pressed="true" value="oke!!">

      </form>
  @else
      <input type="submit" class="btn btn-primary btn-lg active disabled"  disabled aria-pressed="true" value="Masih ada bentrok">

  @endif

  <a href="{{route('pilihJadwal.choose')}}" class="btn btn-success btn-lg">Back</a>
</body>
</html>

@endsection