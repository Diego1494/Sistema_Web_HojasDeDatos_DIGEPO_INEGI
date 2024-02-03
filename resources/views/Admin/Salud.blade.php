<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Salud Archivos</title>
</head>
<body>
<x-app-layout>
<div class="container">
    <div class="row">
        <div class="col-md-4">
        <div class="col-md-6">
            <div class="row">
               <form action="{{ route('importar')}}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="col-md-6">
                <input type="file" name="documento">
</div>
<div class="col-md-6">
    <button class="btn btn-primary" type="submit">Importar </button>
</div>

</form>

<table class="table table-bordered mt-3">
                <tr>
                    <th colspan="3">
                        Salud
                        <a class="btn btn-danger float-end" href="{{ route('exportarSA') }}">Exportar</a>
                    </th>
                </tr>
                <tr>
                    <th>cve_geo</th>
                    <th>sexo</th>
                    <th>gpo_edad</th>
                    <th>pob_total</th>
                    <th>afiliada_total</th>
                    <th>imss</th>
                    <th>issste</th>
                    <th>issste_estatal</th>
                    <th>pemex_def_mar</th>
                    <th>bienestar</th>
                    <th>imss_bienestar</th>
                    <th>privada</th>
                    <th>otra_institucion</th>
                    <th>no_afiliada</th>
                    <th>no_especificada</th>

                </tr>
                @foreach($salud as $sa)
                <tr>
                    <td>{{ $sa->cve_geo }}</td>
                    <td>{{ $sa->sexo }}</td>
                    <td>{{ $sa->gpo_edad}}</td>
                    <td>{{ $sa->pob_total}}</td>
                    <td>{{ $sa->afiliada_total}}</td>
                    <td>{{ $sa->imss}}</td>
                    <td>{{ $sa->issste}}</td>
                    <td>{{ $sa->issste_estatal}}</td>
                    <td>{{ $sa->pemex_def_mar}}</td>
                    <td>{{ $sa->bienestar}}</td>
                    <td>{{ $sa->imss_bienestar}}</td>
                    <td>{{ $sa->privada}}</td>
                    <td>{{ $sa->otra_institucion}}</td>
                    <td>{{ $sa->no_afiliada}}</td>
                    <td>{{ $sa->no_especificada}}</td>
                    
                </tr>
                @endforeach
            </table>
                  </div> 
</div>
        </div>  
</div>

</div>

</x-app-layout>

</body>
</html>