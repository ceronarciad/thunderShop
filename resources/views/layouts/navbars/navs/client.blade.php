<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-info">
    <div class="container px-4">
        <a class="navbar-brand" href="{{ route('home') }}">
             {{-- <h1 class="heading-title text-default mb-1">
                Yuliana
                <small class="text-primary">Tu ama de casa</small>
            </h1>  --}}
            <img src="img/small_logo.png" alt='Yuliana Shop' title="Clic para regresar al inicio" width="100%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="img/small_logo_black.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('contact-us') }}">
                        <i class="ni ni-badge"></i>
                        <span class="nav-link-inner--text">{{ __('Contacto') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('profile.edit') }}">
                        <i class="ni ni-single-02"></i>
                        <span class="nav-link-inner--text">{{ __('Mi cuenta') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="nav-link nav-link-icon" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Salir (' . auth()->user()->name . ")" ) }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>