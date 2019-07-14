@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
<div class="container-fluid">
        {{csrf_field()}} 

        @if ($errors->has('message'))
          <div class="alert alert-warning " role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>¡Alerta! </strong> No se completo el envio del formulario ya que no cumple con las validaciones necesarias</span>
          </div>          
        @endif

        @if(session('success'))
        <div class="alert alert-success " role="alert">
          <span class="alert-icon"><i class="ni ni-like-2"></i></span>
          <span class="alert-text"><strong>¡Exitoso! </strong>{{ session('success') }} </span>
        </div>      
        @endif

        <div class="row">
            <div class="card-group">
                
                     
                <div class="card" style="background-color: #f6f9fc;">
                                <img class="card-img-top" src="/img/pedidos.png" alt="Card image cap">

                                <div class="card-body px-lg-4">
                                        <h3 class="heading-title text-danger mb-2">Contactanos</h3>
                                        <h5 class="text-default mb-2">¿Quieres ser uno de nuestros distribuidores? Llena el siguiente formulario y te decimos cómo convertirte en parte de nuestra red de distribuidores.</h5>
                                        <h5 class="text-muted mb-5">¿Te interesan nuestros productos, quieres compartir con nosotros alguna receta, tip o experiencia? Llena el siguiente formulario y te decimos cómo conseguirlos.</h5>



                                        <form method="post" action="{{ route('contactus.store') }}" autocomplete="off">
                                            {{ csrf_field() }}
                
                                        <div class="row">
                                            
                                                <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                        <input type="text" name="name" class="form-control form-control-alternative" placeholder="Tu nombre completo" />
                                            @if ($errors->has('name'))
                                                                    <span class="help-block">
                                                                      <p class="text-danger">{{ $errors->first('name') }}</p>
                                                                    </span>
                                            @endif
                                                    </div>
                                                    <div class="py-lg-1 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <input type="email" name="email" class="form-control form-control-alternative" placeholder="Tu correo eléctronico" />
                                                        @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                                                    </span>
                                                        @endif
                                                    </div>
                                                    <div class="py-lg-1 form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                                                        <input type="text" name="subject" class="form-control form-control-alternative" placeholder="Motivo del contacto"  />
                                                        @if ($errors->has('subject'))
                                                                    <span class="help-block">
                                                                        <p class="text-danger">{{ $errors->first('subject') }}</p>
                                                                    </span>
                                                        @endif
                                                    </div>
                                                    <div class="py-lg-1">
                                                            <select class="form-control" data-toggle="select" name="type"  title="Tipo de Asunto" data-live-search="true" data-live-search-placeholder="Seleccionar ...">
                                                                    <option value="1">Me interesa ser distribuidor</option>
                                                                    <option value="2">Soy cliente</option>
                                                            </select>
                                                            @if ($errors->has('type'))
                                                            <span class="help-block">
                                                                <p class="text-danger">{{ $errors->first('type') }}</p>
                                                            </span>
                                                @endif
                                                    </div>
                                                    
                                                    <div class="py-lg-3 form-group">
                                                        <input type="submit" name="btnSubmit" class="btn btn-primary" value="Enviar mensaje" />
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">                            
                                                        <textarea  name="message" class="form-control form-control-alternative" rows="11" placeholder="Escribe tu mensaje ..." ></textarea>
                                            @if ($errors->has('message'))
                                            <span class="help-block">
                                            <p class="text-danger">{{ $errors->first('message') }}</p>
                                            </span>
                                            @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </form>     
                                </div>
                </div>
                
            </div>                
          </div>

          
               
</div>    
@endsection