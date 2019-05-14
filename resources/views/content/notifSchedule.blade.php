@extends('layout.confirmPilihanLayout')
@section('content')
    <body background="{{asset('/images/wall3.png')}}" style="width:99.3%">

    <table class="table table-bordered table-dark" style="width:97%;margin-left:1.9%;">
        <thead>
        <td colspan="7" style="text-align: center;font-weight:bold;">Bentrok</td>
        <tr>
            <th scope="col" style="width:5%">NamaDosen</th>
            <th scope="col">NamaMataKuliah</th>
            <th scope="col" style="width:20%">Kelas</th>
            <th scope="col" style="width:20%">WaktuMulai</th>
            <th scope="col" style="width:20%">WaktuSelesai</th>
            <th scope="col" style="width:20%">hari</th>
            <th scope="col" style="width:20%">idRoom</th>
        </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < sizeof($jadwalBentrok); $i++)
            <tr>
                <th scope="row">{{$jadwalBentrok[$i]->namaDosen}}</th>
                <td>{{$jadwalBentrok[$i]->namaMK}}</td>
                <td>{{$jadwalBentrok[$i]->kelas}}</td>
                <td>
                    {{$jadwalBentrok[$i]->waktuMulai}}
                </td>
                <td>
                    {{$jadwalBentrok[$i]->waktuSelesai}}
                </td>
                <td>  @if($jadwalBentrok[$i]->hari == 1)
                        Senin
                    @elseif($jadwalBentrok[$i]->hari == 2)
                        Selasa
                    @elseif($jadwalBentrok[$i]->hari == 3)
                        Rabu
                    @elseif($jadwalBentrok[$i]->hari == 4)
                        Kamis
                    @elseif($jadwalBentrok[$i]->hari == 5)
                        Jumat
                    @endif</td>
                <td>{{$jadwalBentrok[$i]->idRoom}}</td>
            </tr>


        @endfor
        </tbody>
    </table>
    <form action="{{url('/jadwalsaya/' . $janto[0]->id)}}" method="POST">
        @csrf
        <input type="submit" class="btn btn-success btn-md active"  aria-pressed="true" value="Lihat Jadwal Saya!!">
    </form>

    </body>
    </html>

@endsection