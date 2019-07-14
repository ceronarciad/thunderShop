<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-gradient-info" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            <img src="../img/small_logo.png" class="navbar-brand-img" alt="Yuliana">
        </a>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="../img/small_logo.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <ul class="navbar-nav">                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-world text-default "></i> <span class="text-default">{{ __('Tablero') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">
                        <i class="ni ni-circle-08 lg text-default"></i> <span class="text-default"> {{ __('Mi perfil') }} </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">
                        <i class="ni ni-badge text-default"></i> <span class="text-default">{{ __('Administracion de usuarios') }} </span>
                    </a>
                </li>
            </ul>
            
            <ul class="navbar-nav">

                <li class="nav-item" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <a href="{{ route('logout') }}" class="nav-link" href="{{ route('home') }}">
                            <i class="ni ni-user-run text-default"></i> <span class="text-default">{{ __('Salir') }} </span>
                        </a>
                </li>
            <ul>

        </div>
    </div>
</nav>