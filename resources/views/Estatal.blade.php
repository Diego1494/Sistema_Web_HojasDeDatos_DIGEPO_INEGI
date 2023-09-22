@extends('layouts.template')

@section('contenido')

@csrf
<br>
<div class="center">
<h4>Informacion Estatal</h4>
</div>
</br>
<div class="center">
  <h1>Estado de Oaxaca</h1>
</div>


 
<div class="row">
  <div class="col-xs-8  col-md-6">
  <div class="salud" name="graficaSaludEstatal" id="graficaSaludEstatal" style="width: 750px; height: 300px;"></div>
  </div>
  <div class="col-xs-7 col-md-6"><div name="graficaEducacionEstatal" id="graficaEducacionEstatal" style="width: 700px; height: 300px;"></div></div>
</div>

<div class="row">
  <div class="col-xs-8  col-md-6">
  <div name="graficaProyeccionesEstatal" id="graficaProyeccionesEstatal" style="width: 750px; height: 350px;"></div>
  </div>
  <div class="col-xs-7 col-md-5"><div id="graficaTrabajoEstatal" style="width: 600px; height: 300px;"></div>
</div>

<div class="row">
  <div class="col-xs-6  col-md-6">
  <div id="graficaViviendaEstatal" style="width: 700px; height: 300px;"></div>
  </div>
  <div class="col-xs-7 col-md-6"><div id="graficaTicsEstatal" style="width: 750px; height: 300px;"></div>
</div>

  <div class="row">
  <div class="col-xs-6 col-md-3"></div>
  <div class="col-xs-12 col-md-9"><div class="tabla" id="graficaPoblacionEstatal" style="width: 650px; height: 250px;"></div></div>
  <div class="col-xs-6 col-md-4"></div>
</div>

<div class="contenedor">
<button class="btn btn-dark" type="button" onclick="generarPDF()"> Descargar PDF </button>
</div>

@endsection

