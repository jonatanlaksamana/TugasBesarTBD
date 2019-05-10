@extends('layout.pilihjadwallayout')
@section('content')


<body background="{{asset('/images/wall3.png')}}" style=";width:99.36%;">
  {{-- <body background="{{asset('/images/multicol.jpg')}}" style="width:98.67%"> --}}
  

<div class="accordion mt-5" id="accordionExample" >
@foreach($matkul as $parent)
  <div class="card" style="margin-top:-10px;width:100.6815%;">
    <div class="card-header" id="headingOne" style="background-image: url(../../../images/head4.jpg);">
      <h5 class="mb-0">

        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color:white;font-weight:600;">
          {{$parent->name}}
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample" >
      <div class="card-body" >
      <div class="container-fluid" >
                <div class="row" >
                    <div class="col-12">
                    <table class="table table-bordered" style="border-radius:20px;" >
                        <thead>
                        <tr>
                            <th scope="col" style="color:white;font-weight:400;background-image:  linear-gradient(to left, rgb(100, 107, 152,0.99), rgba(110, 143, 102, 0.79))">Matakuliah</th>
                            <th scope="col" style="color:white;font-weight:400;background-image: linear-gradient(to right, rgb(100, 107, 152,0.99), rgba(110, 143, 102, 0.79))">Pilih</th>
                        </tr>
                        </thead>
                        <tbody style="color:black;font-weight:390;">
                        @foreach($parent->children as $child)

                        <tr>
                           
                            <td >{{$child->name}}</td>
                            <td>
                              <input type="checkbox" name="test" id="">
                            </td> 
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
      </div>
     
    </div>
     
    @endforeach
  </div>   
</body>        
@endsection

