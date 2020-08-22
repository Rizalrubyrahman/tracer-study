@extends('layouts.app')
@section('title','Alumni')
@section('content')
    @section('icon')
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg>
    @endsection
@section('pageTitle','Data Alumni')
     <div class="card">
         <div class="card-body">
            <table class="mb-0 table table-bordered">
                <thead>
                <tr>
                    <th>Nama</th>
                    <th class="text-center">Jurusan</th>
                    <th>Alamat</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th>No Telpon</th>
                    <th class="text-center">Opsi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data_alumni as $alumni)
                        <tr>
                            <td>{{ $alumni->nama }}</td>
                            <td class="text-center">{{ $alumni->jurusan }}</td>
                            <td>{{ $alumni->alamat }}</td>
                            <td class="text-center">{{ $alumni->jenis_kelamin }}</td>
                            <td>{{ $alumni->no_telepon }}</td>
                            <td class="text-center">
                                <a href="/admin/alumni/{{ $alumni->id }}/profile" class="btn btn-sm btn-primary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    </svg>
                                </a>
                                
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('modal')
<div class="modal fade" style="z-index: 10000000000000 !important;" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/img/close.jpg') }}" style="width: 200px; height:200px;">
                
            </div>
            <h4 class="text-center">Yakin mau Di hapus?</h4>
        </div>
        <div class="modal-footer">
            <form action="/admin/alumni/{{ $alumni->id }}/delete" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger mr-4">Delete</button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
        </div>
    </div>
    </div>
</div>
@endsection