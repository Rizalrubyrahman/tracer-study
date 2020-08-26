@extends('layouts.app')
@section('title','Profile alumni')
@section('content')
    @section('icon')
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
            <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
        </svg>
    @endsection
    @section('pageTitle','Profile alumni')
       <div class="row">
           <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        <form action="/admin/alumni/{{ $alumni->id }}/edit" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="{{ old('nama') ?? $alumni->nama}}" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}">
                                {!!$errors->first('nama','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="jurusan" class="form-control{{ $errors->has('jurusan') ? ' is-invalid' : '' }}">
                                    <option selected disabled>--Pilih--</option>
                                    <option value="IPA" {{ ($alumni->jurusan == 'IPA') ? 'selected' : '' }}>IPA</option>
                                    <option value="IPS" {{ ($alumni->jurusan == 'IPS') ? 'selected' : '' }}>IPS</option>
                                </select>
                                {!!$errors->first('jurusan','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" cols="30" rows="5">{{ $alumni->alamat }}</textarea>
                                {!!$errors->first('alamat','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <label>Jenis Kelamin</label><br><br>
                            <div style="margin-top:-25px;" class="form-check{{ $errors->has('jenis_kelamin') ? ' is-invalid' : '' }}">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-Laki" {{ ($alumni->jenis_kelamin == 'Laki-Laki') ? 'checked' : '' }} @if (old('jenis_kelamin') == 'Laki-Laki') checked @endif>
                                <label class="form-check-label" for="exampleRadios1">
                                Laki-Laki
                                </label>
                                <input class="form-check-input ml-2" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan" {{ ($alumni->jenis_kelamin == 'Perempuan') ? 'checked' : '' }} @if (old('jenis_kelamin') == 'Perempuan') checked @endif>
                                <label class="form-check-label ml-4" for="exampleRadios1">
                                Perempuan
                                </label>
                            </div>
                            {!!$errors->first('jenis_kelamin','<span class="invalid-feedback">:message</span>')!!}
                            <div class="form-group">
                                <label>No telpon</label>
                                <input type="text" name="no_telepon" value="{{ old('no_telepon') ?? $alumni->no_telepon }}" class="form-control{{ $errors->has('no_telepon') ? ' is-invalid' : '' }}">
                                {!!$errors->first('no_telepon','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <div class="form-group mt-2">
                                <label>Foto Profile</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning">Ubah</button>
                                <a href="/admin/alumni" class="ml-2"><u>back</u></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           </div>
           <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <img src="{{ $alumni->getGambar() }}" style="width:150px; height:150px; border-radius:50%;">
                        </div>
                        <p class="text-center mt-4">{{ $alumni->nama }}</p>
                        <p class="text-center">{{ $alumni->alamat }}</p>
                        <p class="text-center"><b>{{ $alumni->user->email }}</b></p>
                    </div>
                </div>
           </div>
       </div>
@endsection
