@extends('layout.pilihjadwallayout')
@section('content')
{{var_dump($matkul)}}


<div class="accordion mt-5" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Smester 6
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
                    
                            <th scope="col">MataKuliah</th>
                            <th scope="col">selected</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                           
                            <td>Bootstrap 4 CDN and Starter Template</td>
                            <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">n sks</label>
                            </div>
                            </td> 
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
      </div>
    </div>
  </div>          
@endsection

