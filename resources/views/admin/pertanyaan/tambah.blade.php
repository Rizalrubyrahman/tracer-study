@extends('layouts.app')
@section('title','Tambah Pertanyaan')
@section('content')
    @section('icon')
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 3a2 2 0 0 1 2-2h5.293a1 1 0 0 1 .707.293L13.707 5a1 1 0 0 1 .293.707V13a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3zm7 2V2l4 4h-3a1 1 0 0 1-1-1zM4.5 8a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
        </svg>
    @endsection
    @section('pageTitle','Tambah pertanyaan')
    <div class="card">
        <div class="card-body">
            <div class="card-body">
                <form action="/admin/pertanyaan/tambah" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Pertanyaan</label>
                        <textarea name="pertanyaan" class="form-control{{ $errors->has('pertanyaan') ? ' is-invalid' : '' }}" cols="30" rows="5">{{ old('pertanyaan') }}</textarea>
                        {!!$errors->first('pertanyaan','<span class="invalid-feedback">:message</span>')!!}
                    </div>
    
                    <div class="form-group">
                        <label>Jawaban A</label>
                        <input type="text" name="jawaban_a" value="{{ old('jawaban_a') }}" class="form-control{{ $errors->has('jawaban_a') ? ' is-invalid' : '' }}">
                        {!!$errors->first('jawaban_a','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                   
                    <div class="form-group">
                        <label>Jawaban B</label>
                        <input type="text" name="jawaban_b" value="{{ old('jawaban_b') }}" class="form-control{{ $errors->has('jawaban_b') ? ' is-invalid' : '' }}">
                        {!!$errors->first('jawaban_b','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                    <div class="form-group">
                        <label>Jawaban C</label>
                        <input type="text" name="jawaban_c" value="{{ old('jawaban_c') }}" class="form-control{{ $errors->has('jawaban_c') ? ' is-invalid' : '' }}">
                        {!!$errors->first('jawaban_c','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                    <div class="form-group">
                        <label>Jawaban D</label>
                        <input type="text" name="jawaban_d" value="{{ old('jawaban_d') }}" class="form-control{{ $errors->has('jawaban_d') ? ' is-invalid' : '' }}">
                        {!!$errors->first('jawaban_d','<span class="invalid-feedback">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/admin/pertanyaan" class="ml-2"><u>back</u></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
