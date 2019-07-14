@extends('layouts.app', ['class' => 'bg-gradient-default'])

@section('content')

@include('store.products.partials.header', ['title' => __('Agregar Producto'), 'description' =>__('Completa los datos del formulario para registrar un nuevo Producto en la aplicación, puedes dar clic en el icono de ayuda para obtener mas información.')] )   

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
                                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre de producto') }}" required>
                        
                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                        </div>
                                </div>                                    

                                <div class="row">

                                        <div class="col-5">
                                                <div class="form-group{{ $errors->has('barcode') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-barcode">{{ __('Código de Barras') }}</label>
                                                        <input type="text" name="barcode" id="input-barcode" class="form-control form-control-alternative{{ $errors->has('barcode') ? ' is-invalid' : '' }}" placeholder="{{ __('Código de Barras') }}" required>
                        
                                                        @if ($errors->has('barcode'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('barcode') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                        </div>
                                        <div class="col-5">                                                           
                                                <div class="form-group{{ $errors->has('sku') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="input-sku">{{ __('SKU') }}</label>
                                                        <input type="text" name="sku" id="input-sku" class="form-control form-control-alternative{{ $errors->has('sku') ? ' is-invalid' : '' }}" placeholder="{{ __('SKU') }}" required>        
                                                        @if ($errors->has('sku'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('sku') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>       
                                        </div>
                                        <div class="col">     
                                                <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-category">{{ __('Categoria') }}</label>
                                                        
                                                        <select class="form-control form-control-alternative" data-toggle="select" title="Selecciona una Categoria" data-live-search="true" data-live-search-placeholder="Search ...">
                                                        <option>Alerts</option>
                                                        <option>Badges</option>
                                                        <option>Buttons</option>
                                                        <option>Cards</option>
                                                        <option>Forms</option>
                                                        <option>Modals</option>
                                                        </select>                            
                                                </div>                                                                                           
                                        </div>                                        
                                </div>

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
                                            <div class="form-group{{ $errors->has('cost') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="input-cost">{{ __('Costo') }}</label>
                                                    <input type="text" min="0" max="100000" step="1" name="cost" id="input-cost" class="form-control form-control-alternative{{ $errors->has('cost') ? ' is-invalid' : '' }}" placeholder="{{ __('Costo de producto') }}"  required>
                    
                                                    @if ($errors->has('cost'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('cost') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>  
                                    </div>     

                                    <div class="col">
                                            <div class="form-group{{ $errors->has('hasIVA') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label text-primary" for="input-hasIVA">{{ __('¿Tiene IVA?') }}</label>
                                                    <br>
                                                    <label class="custom-toggle">
                                                            <input type="checkbox">
                                                            <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                                    </label>
                                            </div>       
                                    </div>   

                                    <div class="col">                                                                                                
                                            <div class="form-group{{ $errors->has('stock') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="input-stock">{{ __('Stock') }}</label>
                                                    <input type="number" min="0" max="10000"  name="stock" id="input-stock" class="form-control form-control-alternative{{ $errors->has('stock') ? ' is-invalid' : '' }}" placeholder="{{ __('En inventario') }}"  required>
                    
                                                    @if ($errors->has('stock'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('stock') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>  
                                    </div>

                                    <div class="col">                                                                                                
                                    </div>                                       
                                </div>                                            
                                
                                <div class="row">
                                        <div class="col">
                                                <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-price">{{ __('Precio') }}</label>
                                                        <input type="text" min="0.99" max="10000.00" step="0.99" name="price" id="input-price" class="form-control form-control-alternative{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="{{ __('Precio de producto MXN') }}"  required>
                        
                                                        @if ($errors->has('price'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('price') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group{{ $errors->has('hasDiscount') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label text-primary" for="input-hasDiscount">{{ __('¿Tiene Descuento?') }}</label>
                                                    <br>
                                                    <label class="custom-toggle">
                                                            <input type="checkbox"  id="hasDiscount">
                                                            <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Sí"></span>
                                                    </label>
                                            </div>       
                                        </div>    
                                        <div class="col">
                                            <div class="form-group{{ $errors->has('percentPrice') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="input-percentPrice">{{ __('Porcentaje de descuento') }}</label>
                                                    <input type="text" name="percentPrice" id="input-percentPrice" class="form-control form-control-alternative{{ $errors->has('percentPrice') ? ' is-invalid' : '' }}" placeholder="{{ __('0%') }}" required disabled >
                    
                                                    @if ($errors->has('discountPrice'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('discountPrice') }}</strong>
                                                        </span>
                                                    @endif
                                            </div> 
                                        </div>                                          
                                        <div class="col">
                                                <div class="form-group{{ $errors->has('discountPrice') ? ' has-danger' : '' }}">
                                                        <label class="form-control-label" for="input-discountPrice">{{ __('Precio de descuento') }}</label>
                                                        <input type="text" min="0.00" max="10000.00" step="0.01" name="discountPrice" id="input-discountPrice" class="form-control form-control-alternative{{ $errors->has('discountPrice') ? ' is-invalid' : '' }}" placeholder="{{ __('Precio en descuento MXN') }}"  required disabled >
                        
                                                        @if ($errors->has('discountPrice'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('discountPrice') }}</strong>
                                                            </span>
                                                        @endif
                                                </div> 
                                        </div>  
                                
                                </div>                                    
       
                                <variants></variants>                          

                                <br><br>

                            <div class="form-group{{ $errors->has('stock') ? ' has-danger' : '' }}">
                                    <label class="form-control-label  text-primary" for="input-hasDiscount">{{ __('¿Es un producto Activo?') }}</label>
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


@section('page-js-script')
<script type="text/javascript">
    $(document).ready(function() {
        var price = 0;
        var percent = 0;
        
        $('#hasDiscount').change(function() {
        if($(this).is(":checked")) {
            $('#input-percentPrice').prop("disabled", false); 
        }else{
            $('#input-percentPrice').prop("disabled", true);       
        }          
        });

        $('#input-price').keyup(function() {
            price = this.value;
            if ($('#hasDiscount').is(':checked')) {
                setDiscount(price,percent)                
            }
        });      
        
        $('#input-percentPrice').keyup(function() {
            percent = this.value;
            if ($('#hasDiscount').is(':checked')) {
                setDiscount(price,percent)                
            }
        });   
    });

    function setDiscount(price,percent){
        var result = price*percent/100;
        result = price - result;
        $("#input-discountPrice").val(result);
    }

</script>
@stop