@extends('layout.pilihjadwallayout')
@section('content')



<div class="accordion mt-5" id="accordionExample">
@foreach($matkul as $parent)
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">

        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{$parent->name}}
        </button>
      </h5>
    </div>




    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                    
                            <th scope="col">Matakuliah</th>
                            <th scope="col">selected</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($parent->children as $child) 
                        <tr>
                           
                            <td>{{$child->name}}</td>
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
@endsection

