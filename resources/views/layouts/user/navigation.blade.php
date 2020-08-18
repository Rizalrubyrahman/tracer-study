<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" style="color: black;" href="/">Tracer Study</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin: auto;">
            <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                <a class="nav-link" style="color: black;" href="/">Beranda</a>
            </li>
            <li class="nav-item{{ request()->is('event') ? ' active' : '' }}">
                <a class="nav-link" style="color: black;" href="/event">Event</a>
            </li>
            <li class="nav-item{{ request()->is('alumni') ? ' active' : '' }}">
                <a class="nav-link" style="color: black;" href="/alumni">Alumni</a>
            </li>
            <li class="nav-item{{ request()->is('kuesioner') ? ' active' : '' }}">
                <a class="nav-link" style="color: black;" href="/kuesioner">Kuesioner</a>
            </li>

        </ul>
        <div class="d-flex justify-content-right">
            @if (Auth::guest())
                @if (request()->is('/'))
                    <a href="/registrasi" class="btn btn-sm btn-dark" style="border-radius:20px; width:100px;">Registrasi</a>
                @endif
            @else
                @if (!request()->is('registrasi'))
                <div class="dropdown" id="dropdown">
                    <a style="text-decoration: none;" href class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        @if (!auth()->user()->alumni->gambar == NULL)
                            <img src="{{asset('images/'.auth()->user()->alumni->gambar)}}" style="border-radius:50%; width: 50px; height: 50px;">
                        @else
                            @if (auth()->user()->alumni->jenis_kelamin == 'Laki-Laki')
                                <img src="{{asset('images/default-laki2.jpg')}}" style="border-radius:50%; width: 50px; height: 50px;">
                            @else
                                <img src="{{asset('images/default-perempuan.jpg')}}" style="border-radius:50%; width: 50px; height: 50px;">
                            @endif
                        @endif

                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin-left: -175px; padding:50px;">
                        <div class="d-flex justify-content-center">
                            @if (!auth()->user()->alumni->gambar == NULL)
                                <img src="{{asset('images/'.auth()->user()->alumni->gambar)}}" style="width: 150px; height: 150px; border-radius:50%;">
                            @else
                                @if (auth()->user()->alumni->jenis_kelamin == 'Laki-Laki')
                                    <img src="{{asset('images/default-laki2.jpg')}}" style="width: 150px; height: 150px; border-radius:50%;">
                                @else
                                    <img src="{{asset('images/default-perempuan.jpg')}}" style="width: 150px; height: 150px; border-radius:50%;">
                                @endif
                            @endif
                        </div>

                        <h6 class="h2 mt-4 text-center"
                            style="font-size: 16px; text-transform: capitalize; padding-top:10px;">
                            {{auth()->user()->name}}
                        </h6>
                        <p style="font-size: 14px; text-transform: lowercase;" class="text-center">{{auth()->user()->email}}
                        </p>
                        <div class="d-flex justify-content-center" style="margin-top: 50px;">
                            <a class="btn btn-dark text-center"
                                style="background-color:black border:1px solid rgb(192, 184, 184); width:150px; border-radius: 30px; color:black"
                                href="/logout"><i class="ni ni-user-run"></i>
                                <span style="color: white;">Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            @endif
        </div>
    </div>
</nav>