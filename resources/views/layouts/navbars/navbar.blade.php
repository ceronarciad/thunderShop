@auth()

    @if (auth()->user()->id_profile == 1)
        @include('layouts.navbars.navs.client')
    @else
        @if (auth()->user()->id_profile == 5)
            @include('layouts.navbars.navs.seller')
        @endif
    @endif
    
@endauth

@guest()
    @include('layouts.navbars.navs.guest')
@endguest