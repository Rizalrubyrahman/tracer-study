@extends('layouts.user.app')
@section('title','Event')
@section('content')
<div class="container" style="margin-top:50px;">
    <div class="d-flex">
        <div>
            <h4>List event</h4>
            <hr style="border-bottom:1px solid black">
        </div>
    </div>
    <div class="row">
        @foreach ($events as $event)
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header">
                    <h6>{{$event->title}}</h6>
                </div>
                <div class="card-body">
                    <p style="font-size: 14px;">
                        {{ Str::limit($event->description,100,'.') }}
                    </p>
                    <a href="" data-toggle="modal"
                        data-target="#exampleModal{{ $event->id }}">
                        Lihat detail
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $event->id }}" style="z-index: 10000000 !important;"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $event->title }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p style="font-size: 14px;">{{ $event->description }}</p>
                                    <div>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                        {{ $event->tempat }}<br>
                                        Tanggal : {{ date('d-m-Y',strtotime($event->tanggal)) }}<br>
                                        Pukul : {{ date('H:i',strtotime($event->waktu ))}}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer" style="height: 30px;">
                    <p style="margin-top: -10px; font-size: 14px;">published on
                        {{ $event->created_at->diffFOrHumans() }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection