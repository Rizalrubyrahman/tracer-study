<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" style="color: black;" href="/">Tracer Study</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin: auto;">
            <li class="nav-item active">
                <a class="nav-link" style="color: black;" href="/">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="#">Event</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="#">Alumni</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: black;" href="#">Informasi</a>
            </li>
            
        </ul> 
        <div class="d-flex justify-content-right">
            @if (Auth::guest())
                @if (request()->is('/'))
                    <a href="/registrasi" class="btn btn-sm btn-dark" style="border-radius:20px; width:100px;">Registrasi</a>
                @endif
            @else
                <a href="/logout" class="btn btn-sm btn-dark" style="border-radius:20px; width:100px;">Logout</a>
            @endif
       </div>
    </div>
</nav>