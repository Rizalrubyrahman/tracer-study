@extends('layouts.app')
@section('title','Pertanyaan')
@section('content')
    @section('icon')
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 3a2 2 0 0 1 2-2h5.293a1 1 0 0 1 .707.293L13.707 5a1 1 0 0 1 .293.707V13a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3zm7 2V2l4 4h-3a1 1 0 0 1-1-1zM4.5 8a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
        </svg>
    @endsection
@section('pageTitle','Daftar pertanyaan')
    <div class="d-flex justify-content-end">
        <a href="/admin/pertanyaan/tambah" class="btn btn-sm btn-primary">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/>
            </svg>
            Tambah
        </a>
    </div>
     <div class="card mt-4">
         <div class="card-body">
            <div class="table-responsive">
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th>Pernyataan</th>
                        <th>Jawaban A</th>
                        <th>Jawaban B</th>
                        <th>Jawaban C</th>
                        <th style="width:100px;">Jawaban D</th>
                        <th style="width:100px;" class="text-center">Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pertanyaans as $pertanyaan)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $pertanyaan->pertanyaan }}</td>
                                <td>{{ $pertanyaan->jawaban_a }}</td>
                                <td>{{ $pertanyaan->jawaban_b }}</td>
                                <td>{{ $pertanyaan->jawaban_c }}</td>
                                <td>{{ $pertanyaan->jawaban_d }}</td>
                                <td class="text-center">
                                    <a href="/admin/pertanyaan/{{ $pertanyaan->id }}/edit" class="btn btn-sm btn-warning">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                        </svg>
                                    </a>
                                    
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal1">
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
    </div>
@endsection
@section('modal')
<div class="modal fade" style="z-index: 10000000000000 !important;" id="exampleModal1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/img/close.jpg') }}" style="width: 200px; height:200px;">
                
            </div>
            <h4 class="text-center">Yakin mau Di hapus?</h4>
        </div>
        <div class="modal-footer">
            <form action="/admin/pertanyaan/{{ $pertanyaan->id }}/hapus" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger mr-4">Delete</button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
        </div>
    </div>
    </div>
</div>
@endsection