@extends('layouts.template')

@section('contenido')


      @csrf
<br>      
<div style="text-align:center;">
<form name="frm" id="frm">
<h4>Selecciona un municipio</h4>

      <select  name="cvgeo" id="cvgeo" class="select" aria-label="Default select example" onchange="activa_boton(this,this.form.boton)">
      <option value="" selected disabled>Selecciona un municipio</option>
      @foreach($Llave as $Llaves)
       <option value="{{$Llaves ['cvgeo']}}">
       {{$Llaves->municipio }}
       </option>
    @endforeach
   </select>
   <input type="submit" class="btn btn-dark" name="boton" id="boton" value="Descargar PDF" disabled=true onclick="generarPDF()">
</form>
  </div>
  </br> 

   <div class="center">
  
   <h1 id="municipio"></h1>
   
  </div>




<div class="row">
  <div class="col-xs-8  col-md-6">
  <div name="graficaSaludMunicipal" id="graficaSaludMunicipal" style="width: 750px; height: 300px;"></div>
  </div>
  <div class="col-xs-7 col-md-6"><div name="graficaEducacionMunicipal" id="graficaEducacionMunicipal" style="width: 700px; height: 300px;"></div></div>
</div>

<div class="row">
  <div class="col-xs-8  col-md-6">
  <div name="graficaProyeccionesMunicipal" id="graficaProyeccionesMunicipal" style="width: 750px; height: 350px;"></div>
  </div>
  <div class="col-xs-7 col-md-5"><div id="graficaTrabajoMunicipal" style="width: 600px; height: 300px;"></div>
</div>

<div class="row">
  <div class="col-xs-6  col-md-6">
  <div id="graficaViviendaMunicipal" style="width: 700px; height: 300px;"></div>
  </div>
  <div class="col-xs-7 col-md-6"><div id="graficaTicsMunicipal" style="width: 750px; height: 300px;"></div>
</div>

  <div class="row">
  <div class="col-xs-6 col-md-3"></div>
  <div class="col-xs-5 col-md-4"><div class="tabla" id="graficaPoblacionMunicipal" style="width: 650px; height: 250px;"></div></div>
  <div class="col-xs-6 col-md-4"></div>
</div>



@endsection