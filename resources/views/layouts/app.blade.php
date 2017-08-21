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