@extends('layouts.error', ['class' => 'bg-default'])

@section('content')
<br>
    <div class="card-body">
        <br>
        <div class="display-1 text-danger">ERROR 404</div>
        <h1 class="display-3">No disponible</h1>
        <p><strong>El recurso no se encuentra disponible.</strong></p>
        <br>
        <p><img src="../img/yuliana-anim.gif" width="100"></p>
        <p><small><a href="{{ url('/') }}" class="text-link"><b>Regresar al Inicio</b></a></small></p>
        <br>
        <br>
        <br>
    </div>

@endsection