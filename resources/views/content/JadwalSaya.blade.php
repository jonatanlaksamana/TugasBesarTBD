@extends('layout.confirmPilihanLayout')
@section('content')
    <body background="{{asset('/images/wall3.png')}}" style="width:99.3%">

    <table class="table table-bordered table-dark" style="width:97%;margin-left:1.9%;">
        <thead>
        <td colspan="7" style="text-align: center;font-weight:bold;">Jadwal Saya</td>
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

        @for ($i = 0; $i < sizeof($mySchedule); $i++)
            <tr>
                <th scope="row">{{$mySchedule[$i]->name}}</th>
                <td>{{$mySchedule[$i]->name}}</td>
                <td>{{$mySchedule[$i]->kelas}}</td>
                <td>
                    {{$mySchedule[$i]->timeStart}}
                </td>
                <td>
                    {{$mySchedule[$i]->timeEnd}}
                </td>
                <td>  @if($mySchedule[$i]->hari == 1)
                        Senin
                    @elseif($mySchedule[$i]->hari == 2)
                        Selasa
                    @elseif($mySchedule[$i]->hari == 3)
                        Rabu
                    @elseif($mySchedule[$i]->hari == 4)
                        Kamis
                    @elseif($mySchedule[$i]->hari == 5)
                        Jumat
                    @endif</td>
                <td>{{$mySchedule[$i]->idRoom}}</td>
            </tr>


        @endfor
        </tbody>
    </table>
    </body>
    </html>

@endsection