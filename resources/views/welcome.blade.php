@extends('layouts.template')

@section('contenido')

    <head>  
        <title></title>
        
    </head>
    <header>
    <div class="navbar-header">
    @guest
        <a href="{{ route('login') }}" class="navbar-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-lock" viewBox="0 0 16 16">
            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5v-1a1.9 1.9 0 0 1 .01-.2 4.49 4.49 0 0 1 1.534-3.693C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm7 0a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z"/>
            </svg>
        </a>
    @else
        <a href="{{ url('dashboard') }}" class="navbar-link">
            <ion-icon name="call-outline"></ion-icon>
        </a>
    @endguest
</div>
  </header>
    <body>
    
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/286462530_339880554932064_8827790974209557309_n.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/418082558_683702113883238_768051272297486678_n.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/380802527_628957729357677_5786335306855363244_n.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container">
    <div class="row">
        <!-- Sección de Facebook a la izquierda -->
        <div class="col-lg-6">
            <h2 class="fw-normal">Facebook</h2>
            <!-- Código del widget de Facebook -->
            <div class="fb-page" data-href="https://www.facebook.com/digepo.oaxaca/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
        </div>
        <!-- Sección de Twitter a la derecha -->
        <div class="col-lg-6">
            <h2 class="fw-normal">Twitter</h2>
            <!-- Código del widget de Twitter -->
            <a class="twitter-timeline" href="https://twitter.com/digepo_goboax">Tweets by TuCuentaDeTwitter</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</div>



<!-- Agrega el script de Facebook SDK al final de tu página, justo antes de cerrar el cuerpo (</body>) -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=TU_APP_ID&autoLogAppEvents=1" nonce="NONCE"></script>
    </body>

@endsection