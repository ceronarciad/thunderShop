@extends('layouts.error', ['class' => 'bg-default'])

@section('content')
<br>
    <div class="card-body">
        <br>
        <div class="display-1 text-danger">ERROR 403</div>
        <h1 class="display-3">Solicitud denegada</h1>
        <p><strong>No estas autorizado para ver el recurso solicitado.</strong></p>
        <br>
        <p><img src="../img/yuliana-anim.gif" width="100"></p>
        <p><small><a href="{{ url('/') }}" class="text-link"><b>Regresar al Inicio</b></a></small></p>
        <br>
        <br>
        <br>
    </div>

@endsection