@extends('layouts.master')
@section('main')
 
                <div class="card">
                        <div class="card-body">
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#biodata">
                            Tambah Biodata
                          </button>
                          <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th> Nama </th>
                                    <th> Tempat Lahir </th>
                                    <th> Tanggal Lahir </th>
                                    <th> No Telfon </th>
                                    <th> Suara </th>
                                    <th> Action </th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($biodatas as $biodata)
                                    <tr>
                                        <td>{{ $biodata->nama }}</td>
                                        <td>{{ $biodata->tempat }}</td>
                                        <td>{{ $biodata->tanggal_lahir }}</td>
                                        <td>{{ $biodata->no_telfon }}</td>
                                        <td>{{ $biodata->daftar_suara }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                   


    @include('/biodata/modal')
@endsection
