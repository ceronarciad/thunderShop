@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
@include('store.catalogs.partials.header', ['title' => __('Agregar Catalogo'), 'description' =>__('Completa los datos del formulario para registrar un nuevo Catalogo en la aplicación, puedes dar clic en el icono de ayuda para obtener mas información.')] )   

<div class="container-fluid mt--5">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-body">
                    <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                        @csrf                        
                        <div class="row">
                                <div class="col-8 text-left">
                                    <h6 class="heading-small text-muted mb-4">{{ __('Información general') }}</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Volver al listado') }}</a>
                                </div>
                        </div>
                        <div class="pl-lg-4">                              

                                <div class="row">
                                        <div class="col">                                                               
                                            <div class="form-group{{ $errors->has('shortDescription') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="input-shortDescription">{{ __('Descripción breve') }}</label>
                                                    <input type="text" name="shortDescription" id="input-shortDescription" class="form-control form-control-alternative{{ $errors->has('shortDescription') ? ' is-invalid' : '' }}" placeholder="{{ __('Descripción breve') }}"  required>
                    
                                                    @if ($errors->has('shortDescription'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('shortDescription') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>                                           
                                </div> 

                                <div class="row">
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-name">{{ __('Descripción') }}</label>
                                                        <textarea name="name" id="input-description"  rows="3" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Detalle el producto a grandes rasgos') }}" required></textarea>
                                                        @if ($errors->has('description'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('description') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>                                           
                                </div>

                                <div class="row">
                                    <div class="col">                                                               
                                        <div class="form-group{{ $errors->has('UrlData') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-UrlData">{{ __('Ingresa la URL del catalogo digital') }}</label>
                                                <input type="url" name="UrlData" id="input-UrlData" class="form-control form-control-alternative{{ $errors->has('shortDescription') ? ' is-invalid' : '' }}" placeholder="{{ __('Url') }}"  required>
                
                                                @if ($errors->has('UrlData'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('UrlData') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                                    </div>                                           
                                </div>

                                <div class="row">
                                    <div class="col">                                                               
                                            <div class="form-group{{ $errors->has('code') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="input-name">{{ __('Código HTML') }}</label>
                                                    <textarea name="name" id="input-code"  rows="3" class="form-control form-control-alternative{{ $errors->has('code') ? ' is-invalid' : '' }}" placeholder="{{ __('Código HTML del producto') }}" required></textarea>
                                                    @if ($errors->has('code'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('code') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                    </div>                                           
                                </div>

                                <div class="form-group{{ $errors->has('stock') ? ' has-danger' : '' }}">
                                    <label class="form-control-label  text-primary" for="input-hasDiscount">{{ __('¿Es un catalogo Activo?') }}</label>
                                    <br>
                                    <label class="custom-toggle">
                                            <input type="checkbox">
                                            <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                    </label>
                                </div>   
                                
                            <div class="text-center">
                                <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection