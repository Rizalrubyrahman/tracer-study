@extends('layouts.user.app')
@section('title','Beranda')
@section('content')
  <div class="container">
   <div class="row">
     <div class="col-md-4">
      <h1 style="margin-top:150px; font-size:54px;">Tracer Study</h1>
      <p>Studi penelusuran jejak lulusan/alumni yang dilakukan setelah lulus.</p>
      @if (Auth::guest())
          <a href="/login" class="btn btn-primary login">Login</a>
      @endif   
     </div>
     <div class="col-md-8">
      
      <img src="{{ asset('assets/img/banner/5853.png') }}" class="banner"> 
        <div class="lingkaran1"></div>
        <div class="lingkaran2"></div>
        <div class="lingkaran3"></div>
        <div class="lingkaran4"></div>
        <div class="lingkaran5"></div>
        <div class="lingkaran6"></div>
     </div>
   </div>
  </div>
@endsection
