
@extends('layouts.master') 
@section('main')
<section class="vh-100">
    <div class="container-fluid">
      <div style="background-color: white; width: 2000px" class="container pt-5">
      <div class="px-5 ms-xl-4 mb-5">
        <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #23d094;"></i>
        <span class="h1 fw-bold mb-0">Biodata</span>
      </div>
      <div class="row">
        <div class="col-4 text-black">
          
          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 pt-5 pt-xl-0 mt-xl-n5">
  
            <form method="POST" action="{{route('login')}}" width: 23rem;>
  
  
              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example18">Nama</label>
                <input type="email" id="form2Example18" class="form-control form-control-lg" />
              </div>
  
              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example28">Tempat Tanggal Lahir</label>
                <input type="date" id="form2Example28" class="form-control form-control-lg" />
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example28">No Telfon</label>
                <input type="password" id="form2Example28" class="form-control form-control-lg" />
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form2Example28">Suara</label>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Pilih
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Sopran</a></li>
                      <li><a class="dropdown-item" href="#">Mezzo</a></li>
                      <li><a class="dropdown-item" href="#">Alto</a></li>
                    </ul>
                  </div>
              </div>
  
              <div class="pt-1 mb-4">
                <button type="button" class="btn btn-primary">Submit</button>
              </div>
            </div>
  
  
            </form>
  
          </div>
  
          <div class="col-8">
            <table class="table table-striped" id="table1">
              <thead>
                <tr>
                  <th> no </th>
                  <th> no </th>
                  <th> no </th>
                  <th> no </th>
                  <th> no </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td> 1 </td>
                  <td> 1 </td>
                  <td> 1 </td>
                  <td> 1 </td>
                  <td> 1 </td>
                </tr>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </div>
  </section>
@endsection
