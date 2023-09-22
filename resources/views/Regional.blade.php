@extends('layouts.template')

@section('contenido')

    
  
  @csrf
<br>
<div style="text-align:center;">
<form name="frm" id="frm">
<h4>Selecciona una region</h4>

    <select name="region" id="region" class="select"  size="1" onchange="activa_boton(this,this.form.boton)">
    <option value="" selected disabled>Selecciona una region </option> 
    <option value="Cañada" >Cañada</option>
    <option value="Sierra Norte" >Sierra Norte</option>
    <option value="Sierra Sur" >Sierra Sur</option>
    <option value="Papaloapan" >Papaloapan</option>
    <option value="Costa" >Costa</option>
    <option value="Valles Centrales">Valles Centrales</option>
    <option value="Istmo">Istmo</option>
    <option value="Mixteca">Mixteca</option>
    </select>
    <input type="submit" class="btn btn-dark" name="boton" id="boton" value="Descargar PDF" disabled=true onclick="generarPDF()">
</form> 
  </div>
</br>

<div class="center">
  <h1 id="titulo"><span ></span></h1>
</div>


<div class="row">
  <div class="col-xs-8  col-md-6">
  <div name="graficaSalud" id="graficaSalud" style="width: 750px; height: 300px;"></div>
  </div>
  <div class="col-xs-7 col-md-6"><div name="graficaEducacion" id="graficaEducacion" style="width: 700px; height: 300px;"></div></div>
</div>

<div class="row">
  <div class="col-xs-8  col-md-6">
  <div name="graficaProyecciones" id="graficaProyecciones" style="width: 750px; height: 350px;"></div>
  </div>
  <div class="col-xs-7 col-md-5"><div id="graficaTrabajo" style="width: 600px; height: 300px;"></div>
</div>

<div class="row">
  <div class="col-xs-6  col-md-6">
  <div id="graficaVivienda" style="width: 700px; height: 300px;"></div>
  </div>
  <div class="col-xs-7 col-md-6"><div id="graficaTics" style="width: 750px; height: 300px;"></div>
</div>

  <div class="row">
  <div class="col-xs-6 col-md-3"></div>
  <div class="col-xs-5 col-md-4"><div class="tabla" id="graficaPoblacion" style="width: 650px; height: 250px;"></div></div>
  <div class="col-xs-6 col-md-4"></div>
</div>

@endsection
