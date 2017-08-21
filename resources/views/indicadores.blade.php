@extends('layouts.app')

@section('title', 'Nosotros')
@section('class-body', 'pages-internal')

@section('header')
<div class="text-header text-center">
    <div class="container">
    <h1 class="display-4 wow bounceIn">Indicadores</h1>
    <p class="wow bounceIn" data-wow-delay=".3s">Reportes resueltos y en proceso</p>
    </div>
</div>
@endsection

@section('content')
<section class="ruta py-2">
  <div class="container">
      <div class="row">
        <div class="col-12 text-right">
            <a href="/">Inicio</a> >> Indicadores
        </div>
      </div>
  </div>
</section>

  <main class="py-3 lista-indicadores">
      <div class="container">
          <div class="row">
            <div class="col-md-4">
                <article class="item-indicadores">
                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                    <h4>REPORTE DE LUMINARIAS</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#indicador1"> Más Información </a>
                </article>
            </div>

            <div class="col-md-4">
                <article class="item-indicadores">
                    <i class="fa fa-car" aria-hidden="true"></i>
                    <h4>REPORTE DE BACHES</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#indicador2"> Más Información </a>
                </article>
            </div>

            <div class="col-md-4">
                <article class="item-indicadores">
                    <i class="fa fa-street-view" aria-hidden="true"></i>
                    <h4>REPORTE DE PARQUES</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#indicador3"> Más Información </a>
                </article>
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
  
  <div class="modal fade" id="indicador1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REPORTE DE LUMINARIAS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-md-4" style="text-align:center;">
                    <img src="images/icon-alumbrado.svg" alt="Alumbrado" width="200" class="img-fluid mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="indicador2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REPORTE DE BACHES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-md-4" style="text-align:center;">
                    <img src="images/icon-alumbrado.svg" alt="Alumbrado" width="200" class="img-fluid mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="indicador3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">REPORTE DE PARQUES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-md-4" style="text-align:center;">
                    <img src="images/icon-alumbrado.svg" alt="Alumbrado" width="200" class="img-fluid mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection