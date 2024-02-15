<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/style.css" media="all">
  <link rel="icon" href="./img/escudo-oaxaca.png">
  <link rel="stylesheet" href="css/estilos-impresion.css" media="print">
  <style>
     header {
        padding-top: 70px; /* Ajusta este valor según la altura de tu navbar */
    }
    body {
        padding-top: 40px; /* Ajusta este valor según la altura de tu navbar */
    }

    .carousel {
        margin-top: 50px; /* Ajusta este valor según la altura de tu navbar */
    }

    .row {
   margin-bottom: 20px; /* Ajusta el espacio entre secciones según tus preferencias */
  }
.footer {
   bottom: 0;
   width: 100%;

   
}
.card-group {
        margin-top: 56px; /* Ajusta este valor según la altura de tu navbar */
    }
</style>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand"><img src="./img/LOGO OAXACA BLANCO@2x.png" width="200" height="70" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('welcome') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                        <!-- ... (contenido del icono) ... -->
                    </svg> Inicio </a>
                </li>
                <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="{{route ('Datos')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
  <path d="M10 13.5a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-6a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v6zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
</svg> Datos de Interes </a>
           </li>
            <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="https://www.oaxaca.gob.mx/digepo/contacto/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> Contacto </a>
            </ul>
        </div>
    </div>
    <img src="./img/LOGO POBLACION BLANCO@2x.png" width="200" height="70">
</nav>

                 
                 @yield('contenido')
                 
                 </body>
         
                 
                 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                 <script type="text/javascript" src="js/grafico.js"></script>
                 <script type="text/javascript" src="js/graficosalud.js"></script>
                  <script type="text/javascript" src="js/graficaProyecciones.js"></script>
                  <script type="text/javascript" src="js/graficaTrabajo.js"></script>
                  <script type="text/javascript" src="js/graficaVivienda.js"></script>
                  <script type="text/javascript" src="js/graficaTics.js"></script>
                  <script type="text/javascript" src="js/graficaSaludMunicipal.js"></script>
                  <script type="text/javascript" src="js/graficaPoblacionMunicipal.js"></script>
                  <script type="text/javascript" src="js/graficaProyeccionesMunicipal.js"></script>
                  <script type="text/javascript" src="js/graficaTrabajoMunicipal.js"></script>
                  <script type="text/javascript" src="js/graficaViviendaMunicipal.js"></script>
                  <script type="text/javascript" src="js/graficaTicsMunicipal.js"></script>
                  <script type="text/javascript" src="js/graficaPoblacionEstatal.js"></script>
                  <script type="text/javascript" src="js/graficaProyeccionesEstatal.js"></script>
                  <script type="text/javascript" src="js/graficaSaludEstatal.js"></script>
                  <script type="text/javascript" src="js/graficaTrabajoEstatal.js"></script>
                  <script type="text/javascript" src="js/graficaViviendaEstatal.js"></script>
                  <script type="text/javascript" src="js/graficaTicsEstatal.js"></script>
                  <script type="text/javascript" src="js/graficaEducacionMunicipal.js"></script>
                  <script type="text/javascript" src="js/graficaEducacion.js"></script>
                  <script type="text/javascript" src="js/graficaEducacionEstatal.js"></script>
                  <script type="text/javascript" src="js/mostrarboton.js"></script>
                  <script type="text/javascript" src="js/generarPDF.js"></script>
                  <script type="text/javascript" src="js/impresionregional.js"></script> 
                 <script type="text/javascript" src="js/impresionMunicipal.js"></script> 

                 <footer class="footer mt-auto py-3 bg-white">
   <div class="container">
      <!-- Agrega tu logotipo aquí -->
      <img src="./img/l-8SWLUF_400x400.jpg" alt="Tu Logo" width="50" height="50">
      <span class="text-muted text-dark">© 2024 INEGI</span>
   </div>
</footer>
                 </html>
                 