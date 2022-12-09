@extends('layouts.master')
@section('main')
   
                   
<div class="card">
  <div class="card-body">
    
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addfile">
      Launch demo modal
    </button>
    <table class="table table-striped" id="table1">
        <thead>
            <tr>
                <th> Judul File </th>
                <th> Foto </th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($addfiles as $addfile)
                <tr>
                    <td>{{ $addfile->judul_file }}</td>
                    <td>
                        <img src="{{ asset('/storage/' . $addfile->foto) }}" height=100px>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
                    


    @include('/addfile/modal')
@endsection
