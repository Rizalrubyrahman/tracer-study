@extends('layouts.app')
@section('title','Edit Pertanyaan')
@section('content')
    @section('icon')
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
        </svg>
    @endsection
    @section('pageTitle','Edit pertanyaan')
    <div class="card">
        <div class="card-body">
            <div class="card-body">
                <form action="/admin/pertanyaan/{{ $pertanyaan->id }}/edit" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Pertanyaan</label>
                        <textarea name="pertanyaan" class="form-control{{ $errors->has('pertanyaan') ? ' is-invalid' : '' }}" cols="30" rows="5">{{ old('pertanyaan') ?? $pertanyaan->pertanyaan }}</textarea>
                        {!!$errors->first('pertanyaan','<span class="invalid-feedback">:message</span>')!!}
                    </div>
    
                    <div class="form-group">
                        <label>Jawaban A</label>
                        <input type="text" name="jawaban_a" value="{{ old('jawaban_a') ?? $pertanyaan->jawaban_a }}" class="form-control{{ $errors->has('jawaban_a') ? ' is-invalid' : '' }}">
                        {!!$errors->first('jawaban_a','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                   
                    <div class="form-group">
                        <label>Jawaban B</label>
                        <input type="text" name="jawaban_b" value="{{ old('jawaban_b') ?? $pertanyaan->jawaban_b }}" class="form-control{{ $errors->has('jawaban_b') ? ' is-invalid' : '' }}">
                        {!!$errors->first('jawaban_b','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                    <div class="form-group">
                        <label>Jawaban C</label>
                        <input type="text" name="jawaban_c" value="{{ old('jawaban_c') ?? $pertanyaan->jawaban_c }}" class="form-control{{ $errors->has('jawaban_c') ? ' is-invalid' : '' }}">
                        {!!$errors->first('jawaban_c','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                    <div class="form-group">
                        <label>Jawaban D</label>
                        <input type="text" name="jawaban_d" value="{{ old('jawaban_d') ?? $pertanyaan->jawaban_d }}" class="form-control{{ $errors->has('jawaban_d') ? ' is-invalid' : '' }}">
                        {!!$errors->first('jawaban_d','<span class="invalid-feedback">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">Ubah</button>
                        <a href="/admin/pertanyaan" class="ml-2"><u>back</u></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
