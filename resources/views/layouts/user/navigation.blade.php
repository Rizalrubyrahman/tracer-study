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
                <a href="/logout" class="btn btn-sm btn-dark" style="border-radius:20px; width:100px;">Logout</a>
            @endif
            @endif
            
       </div>
    </div>
</nav>