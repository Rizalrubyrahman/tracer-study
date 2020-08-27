@extends('layouts.app')
@section('title','Event')
@section('content')
    @section('icon')
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-date-fill mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM0 5h16v9a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5zm9.336 7.79c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm.066-2.544c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2zm-2.957-2.89v5.332H5.77v-4.61h-.012c-.29.156-.883.52-1.258.777V8.16a12.6 12.6 0 0 1 1.313-.805h.632z"></path>
        </svg>
    @endsection
@section('pageTitle','Daftar Event')
    <div class="d-flex justify-content-end">
        <a href="/admin/event/tambah" class="btn btn-sm btn-primary">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/>
            </svg>
            Tambah
        </a>
    </div>
     <div class="card mt-4">
         <div class="card-body">
            <div class="table-responsive-sm">
                <table class="mb-0 table table-responsive table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th style="width: 200px;">Judul</th>
                        <th style="width: 100px;">Tempat</th>
                        <th style="width: 100px;" class="text-center">Tanggal</th>
                        <th class="text-center">Jam</th>
                        <th>Deskripsi</th>
                        <th style="width: 100px;" class="text-center">Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                           $no = 1; 
                        @endphp
                        @foreach ($events as $event)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->tempat }}</td>
                                <td  class="text-center">{{ date('d-m-Y',strtotime($event->tanggal)) }}</td>
                                    <td class="text-center">{{ date('H:i',strtotime($event->waktu)) }}</td>
                                <td>{{ $event->description }}</td>
                                <td class="text-center">
                                    <a href="/admin/event/{{ $event->id }}/edit" class="btn btn-sm btn-warning">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
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
            <form action="/admin/event/{{ $event->id }}/hapus" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger mr-4">Delete</button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>    
        </div>
    </div>
    </div>
</div>
@endsection