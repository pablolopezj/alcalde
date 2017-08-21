@extends('layouts.app')

@section('title', 'Nosotros')
@section('class-body', 'pages-internal')

@section('header')
<div class="text-header text-center">
      <div class="container">
      <h1 class="display-4 wow bounceIn">Contacto</h1>
      <p class="wow bounceIn" data-wow-delay=".3s">Si tienes alguna duda o sugerencia dejanos saberla.</p>
      </div>
 </div>
@endsection

@section('content')
<section class="ruta py-2">
    <div class="container">
      <div class="row">
        <div class="col-12 text-right">
            <a href="/">Inicio</a> >> Contacto
        </div>
      </div>
    </div>
</section>
<main class="py-3">
          <div class="container">
              <div class="row">
                  <div class="col-md-8">
                        <h2>Formulario de contacto</h2>
                        <form>
                            <div class="form-group row">
                                <label for="name-contact" class="col-sm-2 form-control-label">Nombre</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="name-contact" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Escribe tu nombre">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email-contact" class="col-sm-2 form-control-label">Email</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" id="email-contact" placeholder="E-mail" data-toggle="tooltip" data-placement="top" title="Escribe tu e-mail">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="message-contact" class="col-sm-2 form-control-label">Mensaje</label>
                                <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="message-contact" placeholder="Ingrese su mensaje" data-toggle="tooltip" data-placement="top" title="Escribe tu mensaje"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="button" class="btn btn-primary" name="enviar">Enviar</button>
                                </div>
                            </div>
                        </form>
                  </div>
                  <div class="col-md-4">
                      <h3>Detalle de contacto</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
              </div>
          </div>
      </main>

      <footer class="piedepagina py-2" role="contentinfo">
          <div class="container">
          <p> 2017 Network todos los derechos reservados</p>
          <ul class="redes-sociales">
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
          </ul>
          </div>
      </footer>
      <a data-scroll href="#" class="slide-up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
@endsection

@section ('scripts')
<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
  </script>
@endsection