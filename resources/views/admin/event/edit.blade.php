@extends('layouts.app')
@section('title','Edit Event')
@section('content')
    @section('icon')
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
        </svg>
    @endsection
    @section('pageTitle','Edit event')
    <div class="card">
        <div class="card-body">
            <div class="card-body">
                <form action="/admin/event/{{ $event->id }}/edit" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="title" value="{{ old('title') ?? $event->title }}" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}">
                        {!!$errors->first('title','<span class="invalid-feedback">:message</span>')!!}
                    </div>
                   
                    <div class="form-group">
                        <label>Tempat</label>
                        <input type="text" name="tempat" value="{{ old('tempat') ?? $event->tempat }}" class="form-control{{ $errors->has('tempat') ? ' is-invalid' : '' }}">
                        {!!$errors->first('tempat','<span class="invalid-feedback">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <label>Tanggal</label>
                            <input type="date" name="tanggal" value="{{ old('tanggal') ?? $event->tanggal }}" class="form-control{{ $errors->has('tanggal') ? ' is-invalid' : '' }}">
                        {!!$errors->first('tanggal','<span class="invalid-feedback">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <label>Jam</label>
                        <input type="time" name="waktu" value="{{ old('waktu') ?? $event->waktu }}" class="form-control{{ $errors->has('waktu') ? ' is-invalid' : '' }}">
                        {!!$errors->first('waktu','<span class="invalid-feedback">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" cols="30" rows="5">{{ old('description') ?? $event->description }}</textarea>
                        {!!$errors->first('description','<span class="invalid-feedback">:message</span>')!!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">Ubah</button>
                        <a href="/admin/event" class="ml-2"><u>back</u></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
