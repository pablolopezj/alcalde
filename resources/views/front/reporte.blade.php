@extends('layouts.app')

@section('title', 'Nosotros')
@section('class-body', 'pages-internal')

@section('header')
<div class="text-header text-center">
    <div class="container">
    <h1 class="display-4 wow bounceIn">Reporte ciudadano</h1>
    <p class="wow bounceIn" data-wow-delay=".3s">CAPTURA DE REPORTE CIUDADANO</p>
    </div>
</div>
@endsection

@section('content')
<section class="ruta py-2">
  <div class="container">
      <div class="row">
        <div class="col-12 text-right">
            <a href="/">Inicio</a> >> Reporte
        </div>
      </div>
  </div>
</section>
<main class="py-3">
    <div class="container">
        <div class="row">
              <div class="col-md-6">
                    <h3>¿En qué podemos ayudarte? Estamos encantados de atenderte.</h2>
                    <form>
                        <div class="form-group row">
                            <label for="typeof-report" class="col-sm-2 form-control-label">Tipo de reporte</label>
                            <div class="col-sm-10">
                            <select class="form-control custom-select" id="typeof-report" data-toggle="tooltip" data-placement="top" title="Selecciona el tipo de reporte">
                                <option value="1"> Uno </option>
                                <option value="2"> dos </option>
                                <option value="3"> tres </option>
                                <option value="4"> cuatro </option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colonia-report" class="col-sm-2 form-control-label">Colonia: </label>
                            <div class="col-sm-10">
                            <select class="form-control custom-select" id="colonia-report" placeholder="Colonia" data-toggle="tooltip" data-placement="top" title="Selecciona tu colonia">
                                <option value="1">Colonia uno</option>
                                <option value="2">Colonia dos</option>
                                <option value="3">Colonia tres</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion-report" class="col-sm-2 form-control-label">Dirección</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="direccion-report" placeholder="Dirección donde ocurre el incidente" data-toggle="tooltip" data-placement="top" title="Escribe la dirección del incidente"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="referencia-report" class="col-sm-2 form-control-label">Referencia</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="referencia-report" placeholder="Escribe una referencia" data-toggle="tooltip" data-placement="top" title="Escribe una referencia"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre-report" class="col-sm-2 form-control-label">Nombre: </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre-report" placeholder="Nombre " data-toggle="tooltip" data-placement="top" title="Nombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefono-report" class="col-sm-2 form-control-label">Teléfono: </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono-report" placeholder="Teléfono " data-toggle="tooltip" data-placement="top" title="Teléfono ">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email-report" class="col-sm-2 form-control-label">Correo electrónico: </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="email-report" placeholder="Correo electrónico " data-toggle="tooltip" data-placement="top" title="Correo electrónico">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto-report" class="col-sm-2 form-control-label">Adjuntar foto: </label>
                            <div class="col-sm-10">
                            <input type="file" class="form-control" id="foto-report" placeholder="Sube una foto del incidente" data-toggle="tooltip" data-placement="top" title="Sube una foto del incidente">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="button" class="btn btn-primary" name="enviar">Enviar</button>
                            </div>
                        </div>
                    </form>
              </div>
              <div class="col-md-6">
                      <h3>Localiza en el mapa el incidente</h3>
                      <div id="map"></div>
               </div>
        </div>
    </div>
</main>
@endsection

@section ('scripts')

<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
</script>
@endsection