@extends('layouts.app')

@section('title', 'Inicio')

@section('header')
    <div class="text-header text-center">
        <div class="container">
            <h1 class="display-4 wow bounceIn">Alcalde Tulancingo En Línea</h1>
            <p class="wow bounceIn" data-wow-delay=".3s">Usa la plataforma para reportar las necesidades de la ciudad de Tulancingo Hgo.</p>
            <a href="contacto.html" class="btn btn-primary btn-lg">Reportar incidente</a>
        </div>
    </div>

    <div class="arrow-down text-center">
        <a data-scroll href="#reporte-cidadano"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
    </div>
@endsection 

@section('content')
    <section class="reporte-ciudadano pt-3" id="reporte-cidadano">
          <div class="container">
          <div class="row">
              <div class="col-md-8 col-xl-9 text-justify ">
                    <h2 class="h3 text-center font-weight-bold text-md-left">Reporte ciudadano</h2>
                    <p>A través de Alcalde de Tulancingo en Línea, puedes contribuir para transformar nuestra ciudad. Reporta, participa y entérate de las necesidades que tenemos en nuestra comunidad. Con tu ayuda podremos ser más eficientes y lograr la transformación que Ciudad de Tulancingo necesita.</p>
              </div>
              <div class="col-md-4 col-xl-3 text-center">
                  <img class="img-fluid wow zoomIn"  src="images/hand-tulancingo.png" alt="Reporte-ciudadano">
              </div>
          </div>
          </div>
     </section>
     
     <section class="transforma-t py-2">
          <div class="container">
              <h2 class="h3 text-center font-weight-bold">Se parte de quienes trasnforman <span>la ciudad de Tulancingo</span></h2>
              <p class="text-center">Reportes  de las categorías más populares.</p>
              <div class="row">
                  <ul class="col-6  col-lg-4 text-center text-lg-left">
                      <li class="wow zoomIn"  data-wow-delay=".3s">
                          <i class="fa fa-users" aria-hidden="true"></i>
                          <div class="contenedor-eleccion">
                              <h4>Usuarios Registrados</h4>
                              <p class="hidden-md-down">Número de usuarios registrados en la platadforma.</p>
                          </div>
                      </li>
                      <li class="wow zoomIn" data-wow-delay=".3s">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          <div class="contenedor-eleccion">
                              <h4>Reportes resueltos</h4>
                              <p class="hidden-md-down">Reportes resueltos exitosamente.</p>
                          </div>
                      </li>
                      <li class="wow zoomIn" data-wow-delay=".3s">
                          <i class="fa fa-car" aria-hidden="true"></i>
                          <div class="contenedor-eleccion">
                              <h4>Reportes de baches</h4>
                              <p class="hidden-md-down">Con tu ayuda mejoramos nuestras calles.</p>
                          </div>
                      </li>
                  </ul>
                  <div class="col-lg-4 hidden-md-down">
                      <img src="images/network.svg" alt="NetWork Tulancingo">
                  </div>
                  <ul class="col-6 col-lg-4 text-center text-lg-right">
                      <li class="wow zoomIn"  data-wow-delay=".5s">
                          <i class="fa fa-list-alt" aria-hidden="true"></i>
                           <div class="contenedor-eleccion">
                               <h4>Total de reportes</h4>
                               <p class="hidden-md-down">Número de reportes hechos atravez de nuestra plataforma.</p>
                           </div>
                      </li>
                      <li class="wow zoomIn"  data-wow-delay=".5s">
                          <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                          <div class="contenedor-eleccion">
                              <h4>Reportes de luminarias</h4>
                              <p class="hidden-md-down">Número de reportes hechos atravez de nuestra plataforma.</p>
                          </div>
                      </li>
                      <li class="wow zoomIn"  data-wow-delay=".5s">
                          <i class="fa fa-street-view" aria-hidden="true"></i>
                          <div class="contenedor-eleccion">
                              <h4>Reportes de parques</h4>
                              <p class="hidden-md-down">Número de reportes hechos atravez de nuestra plataforma.</p>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </section>
      <main class="reportes-ciudadanos py-1">
          <div class="container">
              <h2 class="h3 text-center font-weight-bold">Reporta a travez de la plataforma en línea</h2>
              <div class="row">
              <article class="col-md-4">
                  <img src="images/icon-alumbrado.svg" alt="Alumbrado">
                  <h3><a href="#">Reporte de Alumbrado</a></h3>
                  <p class="hidden-sm-down">Número de usuarios registrados en la platadforma.</p>
                  <a href="#" class="btn btn-secondary hidden-sm-down"> Más información</a>
              </article>
              <article class="col-md-4">
                  <img src="images/icono-calles.svg" alt="Baches">
                  <h3><a href="#">Reporte de baches</a></h3>
                  <p class="hidden-sm-down">Número de usuarios registrados en la platadforma.</p>
                  <a href="#" class="btn btn-secondary hidden-sm-down"> Más información</a>
              </article>
              <article class="col-md-4">
                  <img src="images/icono-incidentes.svg" alt="Alumbrado">
                  <h3><a href="#">Reporte de insidentes</a></h3>
                  <p class="hidden-sm-down">Número de usuarios registrados en la platadforma.</p>
                  <a href="#" class="btn btn-secondary hidden-sm-down"> Más información</a>
              </article>
              </div>
          </div>
      </main>
      
      <section class="ultimos-reportes py-2">
          <div class="container">
          <h2 class="h3 text-center font-weight-bold">Ultimos reportes</h2>
          <div class="owl-carousel">
              <a href="#">
                  <h4>Luminarias</h4>
                  <img src="images/proyecto1.jpg" alt="Luminarias">
              </a>
              <a href="#">
                  <h4>Baches</h4>
                  <img src="images/proyecto2.jpg" alt="Baches">
              </a>
              <a href="#">
                  <h4>Insidentes</h4>
                  <img src="images/proyecto3.jpg" alt="Insidentes">
              </a>
              <a href="#">
                  <h4>Fugas</h4>
                  <img src="images/proyecto4.jpg" alt="Fugas">
              </a>
              <a href="#">
                  <h4>Incidencia</h4>
                  <img src="images/proyecto5.jpg" alt="Incidencia">
              </a>
          </div>
          </div>
      </section>
      
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
      <a data-scroll href="#header" class="slide-up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
@endsection

@section ('scripts')
<script type="text/javascript">
      $(document).ready(function(){
           $(".owl-carousel").owlCarousel({
               loop: true,
               margin: 0,
               nav: true,
               autoWidth: false,
               navText: ['<i class="fa fa-arrow-circle-left" title="Anterior"></i>', '<i class="fa  fa-arrow-circle-right" title="Siguiente"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    500: {
                        items: 2,
                        margin: 20
                    },
                    800: {
                        items: 3,
                        margin: 20
                    },
                    1000: {
                        items: 4,
                        margin: 20
                    }
                }
           });
       });
</script>
@endsection