@extends('layouts.app', ['class' => 'bg-gradient-default'])

@section('content')

                <select class="form-control" data-toggle="select" title="Simple select" data-live-search="true" data-live-search-placeholder="Search ...">
                    <option>Alerts</option>
                    <option>Badges</option>
                    <option>Buttons</option>
                    <option>Cards</option>
                    <option>Forms</option>
                    <option>Modals</option>
                </select>

            
            

@include('sellers.partials.header', ['title' => __('Agregar Proveedor'), 'description' =>__('Completa los datos del formulario para registrar un nuevo Producto en la aplicación, puedes dar clic en el icono de ayuda para obtener mas información.')] )   <div class="container-fluid mt--5">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-body">
                    <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                        @csrf                        
                        <div class="row">
                                <div class="col-8 text-left">
                                    <h6 class="heading-small text-muted mb-4">{{ __('Datos generales') }}</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Volver al listado') }}</a>
                                </div>
                        </div>
                        
                        <div class="pl-lg-4">                              

                                <div class="row">
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('nameSeller') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-nameSeller">{{ __('Nombre del Proveedor') }}</label>
                                                        <input type="text" name="nameSeller" id="input-nameSeller" class="form-control form-control-alternative{{ $errors->has('nameSeller') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre del Proveedor') }}"  required>
                        
                                                        @if ($errors->has('nameSeller'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('nameSeller') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>     
                                </div>
                                
                                <div class="row">
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('codeSeller') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-codeSeller">{{ __('Código del Proveedor') }}</label>
                                                        <input type="text" name="nameSeller" id="input-codeSeller" class="form-control form-control-alternative{{ $errors->has('codeSeller') ? ' is-invalid' : '' }}" placeholder="{{ __('Código del Proveedor') }}"  required>
                        
                                                        @if ($errors->has('codeSeller'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('codeSeller') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div> 
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('rfcSeller') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-rfcSeller">{{ __('RFC') }}</label>
                                                        <input type="text" name="rfcSeller" id="input-rfcSeller" class="form-control form-control-alternative{{ $errors->has('rfcSeller') ? ' is-invalid' : '' }}" placeholder="{{ __('RFC del Proveedor') }}"  required>
                        
                                                        @if ($errors->has('rfcSeller'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('rfcSeller') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>                                                                                
                                </div>      

                                <div class="row">
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('brandSeller') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-brandSeller">{{ __('Razón Social') }}</label>
                                                        <input type="text" name="nameSeller" id="input-brandSeller" class="form-control form-control-alternative{{ $errors->has('brandSeller') ? ' is-invalid' : '' }}" placeholder="{{ __('Razón Social') }}"  required>
                        
                                                        @if ($errors->has('brandSeller'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('brandSeller') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div> 
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('website') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-website">{{ __('Website') }}</label>
                                                        <input type="url" name="nameSeller" id="input-website" class="form-control form-control-alternative{{ $errors->has('website') ? ' is-invalid' : '' }}" placeholder="{{ __('Página web') }}"  required>
                        
                                                        @if ($errors->has('website'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('website') }}</strong>
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
                        </div>  

                        <hr>

                        <div class="row">
                                <div class="col-8 text-left">
                                    <h6 class="heading-small text-muted mb-4">{{ __('Información Comercial') }}</h6>
                                </div>
                        </div>   
                        <div class="pl-lg-4">                              
                                
                                <div class="row">
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('bank') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-bank">{{ __('Banco') }}</label>
                                                        <input type="text" name="bank" id="input-bank" class="form-control form-control-alternative{{ $errors->has('codeSeller') ? ' is-invalid' : '' }}" placeholder="{{ __('Banco') }}"  required>
                        
                                                        @if ($errors->has('bank'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('bank') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div> 
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('bankAccount') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-bankAccount">{{ __('Cuenta Bancaria') }}</label>
                                                        <input type="text" name="bankAccount" id="input-bankAccount" class="form-control form-control-alternative{{ $errors->has('bankAccount') ? ' is-invalid' : '' }}" placeholder="{{ __('Cuenta Bancaria') }}"  required>
                        
                                                        @if ($errors->has('bankAccount'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('bankAccount') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>    
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('accountNumberClabe') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-accountNumberClabe">{{ __('Numero de Cuenta Clabe') }}</label>
                                                        <input type="text" name="accountNumberClabe" id="input-accountNumberClabe" class="form-control form-control-alternative{{ $errors->has('accountNumberClabe') ? ' is-invalid' : '' }}" placeholder="{{ __('Numero de Cuenta Clabe') }}"  required>
                        
                                                        @if ($errors->has('accountNumberClabe'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('accountNumberClabe') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>                                                                                                                      
                                </div>      

                        </div>  
                        <hr>

                        <div class="row">
                                <div class="col-8 text-left">
                                    <h6 class="heading-small text-muted mb-4">{{ __('Dirección') }}</h6>
                                </div>
                        </div>   
                        <div class="pl-lg-4">                              
                                
                                <div class="row">
                                        <div class="col-8">                                                               
                                                <div class="form-group{{ $errors->has('street') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-street">{{ __('Calle') }}</label>
                                                        <input type="text" name="street" id="input-street" class="form-control form-control-alternative{{ $errors->has('street') ? ' is-invalid' : '' }}" placeholder="{{ __('Calle') }}"  required>
                        
                                                        @if ($errors->has('street'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('street') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div> 
                                        <div class="col-2">                                                               
                                                <div class="form-group{{ $errors->has('noExt') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-noExt">{{ __('No. Ext') }}</label>
                                                        <input type="text" name="noExt" id="input-noExt" class="form-control form-control-alternative{{ $errors->has('noExt') ? ' is-invalid' : '' }}" placeholder="{{ __('Numero Exterior') }}"  required>
                        
                                                        @if ($errors->has('noExt'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('noExt') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>    
                                        <div class="col-2">                                                               
                                                <div class="form-group{{ $errors->has('noInt') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-accountNumberClabe">{{ __('No. Int') }}</label>
                                                        <input type="text" name="noInt" id="input-noInt" class="form-control form-control-alternative{{ $errors->has('noInt') ? ' is-invalid' : '' }}" placeholder="{{ __('Numero Interior') }}"  required>
                        
                                                        @if ($errors->has('noInt'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('noInt') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>                                                                                                                      
                                </div>      
                                <div class="row">
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('municipality') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-municipality">{{ __('Delegación / Municipio') }}</label>
                                                        <input type="text" name="municipality" id="input-municipality" class="form-control form-control-alternative{{ $errors->has('municipality') ? ' is-invalid' : '' }}" placeholder="{{ __('Delegación o Municipio') }}"  required>
                        
                                                        @if ($errors->has('municipality'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('municipality') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div> 
                                        <div class="col">                                                               
                                                <div class="form-group{{ $errors->has('Colony') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-Colony">{{ __('Colonia') }}</label>
                                                        <input type="text" name="Colony" id="input-Colony" class="form-control form-control-alternative{{ $errors->has('Colony') ? ' is-invalid' : '' }}" placeholder="{{ __('Colonia') }}"  required>
                        
                                                        @if ($errors->has('Colony'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('Colony') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>                                                                                                                       
                                </div>  
                                <div class="row">
                                        <div class="col-5">                                                               
                                                <div class="form-group{{ $errors->has('city') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-city">{{ __('Ciudad') }}</label>
                                                        <input type="text" name="city" id="input-city" class="form-control form-control-alternative{{ $errors->has('strcityeet') ? ' is-invalid' : '' }}" placeholder="{{ __('Ciudad') }}"  required>
                        
                                                        @if ($errors->has('city'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('city') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div> 
                                        <div class="col-5">                                                               
                                                <div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-state">{{ __('Estado') }}</label>
                                                        <input type="text" name="state" id="input-state" class="form-control form-control-alternative{{ $errors->has('state') ? ' is-invalid' : '' }}" placeholder="{{ __('Estado') }}"  required>
                        
                                                        @if ($errors->has('state'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('state') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>    
                                        <div class="col-2">                                                               
                                                <div class="form-group{{ $errors->has('zipCode') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-zipCode">{{ __('Código Postal') }}</label>
                                                        <input type="text" name="zipCode" id="input-zipCode" class="form-control form-control-alternative{{ $errors->has('zipCode') ? ' is-invalid' : '' }}" placeholder="{{ __('Código Postal') }}"  required>
                        
                                                        @if ($errors->has('zipCode'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('zipCode') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>                                                                                                                      
                                </div>                                   
                        </div>         
                        <br><br>
                        <div class="form-group{{ $errors->has('stock') ? ' has-danger' : '' }}">
                                <label class="form-control-label  text-primary" for="input-hasDiscount">{{ __('¿Es un Proveedor Activo?') }}</label>
                                <br>
                                <label class="custom-toggle">
                                        <input type="checkbox">
                                        <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                </label>
                            </div>   
                            
                        <div class="text-center">
                            <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                        </div>                                                                         
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection