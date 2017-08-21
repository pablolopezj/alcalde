@extends('layouts.app')

@section('title', 'Nosotros')
@section('class-body', 'pages-internal')

@section('header')
<div class="text-header text-center">
    <div class="container">
    <h1 class="display-4 wow bounceIn">Nosotros</h1>
    <p class="wow bounceIn" data-wow-delay=".3s">¿Qué es? y ¿Para que sirve Alcade en Línea Tulancingo?</p>
    </div>
</div>
@endsection

@section('content')
    <section class="ruta py-2">
          <div class="container">
              <div class="row">
                <div class="col-12 text-right">
                    <a href="index.html">Inicio</a> >> Nosotros
                </div>
              </div>
          </div>
      </section>
      <main class="py-3">
          <div class="container">
              <div class="row">
                <article class="col-12 col-sm-8">
                    <h2>Trabajamos para mejorar Tulancingo.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                         ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                         cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                     <div id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="card">
                        <h5 class="card-header" role="tab" >
                            <a  class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-mision">MISIÓN</a>
                        </h5>

                        <div id="tab-mision" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                          <div class="card-block">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <h5 class="card-header" role="tab" >
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-vision">VISIÓN</a>
                        </h5>
                        <div id="tab-vision" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="card-block">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <h5 class="card-header" role="tab">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tab-valores">VALORES</a>
                        </h5>
                        <div id="tab-valores" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="card-block">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>

                 </article>
                 <aside class="col-12 col-sm-4 ">
                         <img src="images/nosotros.svg" alt="Nosotros" class="img-fluid wow zoomIn">
                 </aside>
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
      <a  data-scroll href="#" class="slide-up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
@endsection