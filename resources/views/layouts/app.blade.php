<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Alcalde en línea - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie-edge">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <!-- Fuentes-->
        <link href="https://fonts.googleapis.com/css?family=Lato|Raleway" rel="stylesheet">
        <!-- Icons -->
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/animate.min.css">
        <!-- CARRUSEL -->
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/css/style.css">
        @yield('styles')
    </head>
    <body class="@yield('class-body')">
        <section class="wellcome">
            @include('layouts.menu')
            @yield('header')
        </section>

        @yield('content')

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
      <a  data-scroll href="#" class="slide-up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="register-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Unete a la comunidad para mejorar Tulancingo de Bravo Hgo.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="/register"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
        
        <!-- Files JS -->
      <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
      <script src="js/tether.min.js" charset="utf-8"></script>
      <script src="js/bootstrap.min.js" charset="utf-8"></script>
      <script src="js/wow.min.js" charset="utf-8"></script>
      <!-- GALERIA DE IMAGENES -->
      <script src="js/owl.carousel.min.js" charset="utf-8"></script>
      <script src="js/smooth-scroll.min.js" charset="utf-8"></script>
      <script src="js/main.js" charset="utf-8"></script>
      
      @yield('scripts')
    </body>
</html>