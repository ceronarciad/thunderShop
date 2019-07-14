@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<h2 class="display-3 text-primary mb-6">Bienvenido  
@guest()
    Invitado
@endguest

@auth()
    {{auth()->user()->name }} Rango <b class="text-danger">
    @if (auth()->user()->id_profile == 1)
        Miembro
    @elseif(auth()->user()->id_profile == 5)
        Vendedor
    @elseif(auth()->user()->id_profile == 9)
        SuperAdmin        
    @endif
    <b>
@endauth

</h2>
<spinner v-show="loading"></spinner>
@endsection