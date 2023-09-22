@extends('layouts.template')

@section('contenido')


<div class="card-group">
  <div class="card">
     <div class="card-img-overlay">
       <h5 class="texto text-dark">Estatal</h5>
         <a href="{{route ('Estatal')}}"><img src="./img/cd292a0b-5a9e-432a-8aac-d4a88272049b.jpg" class="card-img-top img-transparente"   alt=""  height="510"></a>
      </div>
  </div>
  
  <div class="card">
    <div class="card-img-overlay">
    <h5 class="Regional text-dark">Regional</h5>
    <a href="{{route ('Regional')}}"><img src="./img/aa3d96ea7110dfef3c7c2a8ff6eb2902.jpg" class="card-img-top img-transparente" alt="" height="510"></a>
    
    </div>
  </div>
  
  <div class="card">
  
    <div class="card-img-overlay">
    <h5 class="Municipal text-dark">Municipal</h5>
    <a href="{{route ('Municipal')}}"><img src="./img/palacio-municipal.jpg" class="card-img-top img-transparente" alt="" height="510" ></a>
    
    </div>
  </div>
</div>
@endsection