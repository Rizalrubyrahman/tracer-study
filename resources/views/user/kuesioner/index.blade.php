@extends('layouts.user.app')
@section('title','Kuesioner')
@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </em>
                </div>
            @endif
            <div class="card">
                <div class="card-header" style="border-left: 3px solid rgb(115, 115, 221);">
                    <h6>Kuesioner Alumni</h6>
                </div>
                <div class="card-body">
                    <form action="/kuesioner" method="POST">
                        @csrf
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($pertanyaans as $pertanyaan)
                        <fieldset class="form-group">
                            <h6 class="mt-4">{{ $no++ }}. {{ $pertanyaan->pertanyaan }}</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban{{ $pertanyaan->id }}"
                                    value="A" id="gridRadios1">
                                <label class="form-check-label" for="gridRadios1">
                                    {{ $pertanyaan->jawaban_a }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban{{ $pertanyaan->id }}"
                                    value="B" id="gridRadios1">
                                <label class="form-check-label" for="gridRadios1">
                                    {{ $pertanyaan->jawaban_b }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban{{ $pertanyaan->id }}"
                                    value="C" id="gridRadios1">
                                <label class="form-check-label" for="gridRadios1">
                                    {{ $pertanyaan->jawaban_c }}
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jawaban{{ $pertanyaan->id }}"
                                    value="D" id="gridRadios1">
                                <label class="form-check-label" for="gridRadios1">
                                    {{ $pertanyaan->jawaban_d }}
                                </label>
                            </div>
                        </fieldset>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="footer mt-4">

    </div>
</div>
@endsection