@extends('layouts.app')
@section('title','Tambah Event')
@section('content')
    @section('icon')
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 3a2 2 0 0 1 2-2h5.293a1 1 0 0 1 .707.293L13.707 5a1 1 0 0 1 .293.707V13a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3zm7 2V2l4 4h-3a1 1 0 0 1-1-1zM4.5 8a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
        </svg>
    @endsection
    @section('pageTitle','Tambah event')
    <div class="card">
        <div class="card-body">
            <div class="card-body">
                <form action="/admin/event/tambah" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="title" value="{{ old('title') }}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                        {!!$errors->first('title','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                   
                    <div class="form-group">
                        <label>Tempat</label>
                        <input type="text" name="tempat" value="{{ old('tempat') }}" class="form-control{{ $errors->has('tempat') ? ' is-invalid' : '' }}">
                        {!!$errors->first('tempat','<span class="invalid-feedback">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                            <input type="date" name="tanggal" value="{{ old('tanggal') }}" class="form-control{{ $errors->has('tanggal') ? ' is-invalid' : '' }}">
                        {!!$errors->first('tanggal','<span class="invalid-feedback">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <label>Jam</label>
                        <input type="time" name="waktu" value="{{ old('waktu') }}" class="form-control{{ $errors->has('waktu') ? ' is-invalid' : '' }}">
                        {!!$errors->first('waktu','<span class="invalid-feedback">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" cols="30" rows="5">{{ old('description') }}</textarea>
                        {!!$errors->first('description','<span class="invalid-feedback">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/admin/event" class="ml-2"><u>back</u></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
