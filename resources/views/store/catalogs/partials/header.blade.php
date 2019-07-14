<div class="header pb-3 pt-3 pt-lg-3 d-flex align-items-center" style="background-image: url(../img/headers/colors.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-5"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-md-12 {{ $class ?? '' }}">
                <h1 class="display-2 text-white">{{ $title }}</h1>
                @if (isset($description) && $description)
                    <h5 class="text-white mt-0 mb-5">{{ $description }}</h5>
                @endif
            </div>
        </div>
    </div>
</div> 