@extends('layouts.user.app')
@section('title','Registrasi')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card" style="margin-top: 50px;">
                    <div class="card-header" style="border-top: 2px solid rgb(79, 79, 240)">
                        <h6>Registrasi</h6>
                    </div>
                    <div class="card-body">
                        <form action="/registrasi" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" value="{{ old('nama') }}" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}">
                                {!!$errors->first('nama','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select name="jurusan" class="form-control{{ $errors->has('jurusan') ? ' is-invalid' : '' }}">
                                    <option selected disabled>--Pilih--</option>
                                    <option value="IPA">IPA</option>
                                    <option value="IPS">IPS</option>
                                </select>
                                {!!$errors->first('jurusan','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" cols="30" rows="5"></textarea>
                                {!!$errors->first('alamat','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <label>Jenis Kelamin</label><br><br>
                            <div style="margin-top:-25px;" class="form-check{{ $errors->has('jenis_kelamin') ? ' is-invalid' : '' }}">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Laki-Laki">
                                <label class="form-check-label" for="exampleRadios1">
                                Laki-Laki
                                </label>
                                <input class="form-check-input ml-2" type="radio" name="jenis_kelamin" id="exampleRadios1" value="Perempuan">
                                <label class="form-check-label ml-4" for="exampleRadios1">
                                Perempuan
                                </label>
                            </div>
                            {!!$errors->first('jenis_kelamin','<span class="invalid-feedback">:message</span>')!!}
                            <div class="form-group mt-2">
                                <label>Status</label>
                                <select name="status" class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}">
                                    <option selected disabled>--Pilih--</option>
                                    <option value="Bekerja">Bekerja</option>
                                    <option value="Kuliah">Kuliah</option>
                                    <option value="Dll">Dll</option>
                                </select>
                                {!!$errors->first('status','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <div class="form-group">
                                <label>No telpon</label>
                                <input type="text" name="no_telepon" value="{{ old('no_telepon') }}" class="form-control{{ $errors->has('no_telepon') ? ' is-invalid' : '' }}">
                                {!!$errors->first('no_telepon','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <div class="form-group mt-2">
                                <label>Foto Profile</label>
                                <input type="file" name="gambar" value="{{ old('gambar') }}" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                                {!!$errors->first('email','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <div class="form-group mt-2">
                                <label>Password</label>
                                <input type="password" name="password" value="{{ old('password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                                {!!$errors->first('password','<span class="invalid-feedback">:message</span>')!!}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                                <a href="/" class="ml-2"><u>back</u></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection