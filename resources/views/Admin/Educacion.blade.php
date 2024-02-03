<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Educacion Archivos</title>
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
                        Educacion
                        <a class="btn btn-danger float-end" href="{{ route('exportarED') }}">Exportar</a>
                    </th>
                </tr>
                <tr>
                    <th>cve_geo</th>
                    <th>sexo</th>
                    <th>gpo_edad</th>
                    <th>pob_3_anios_y_mas</th>
                    <th>sin_escolaridad</th>
                    <th>basico_preescolar</th>
                    <th>basico_primaria</th>
                    <th>basico_secundaria</th>
                    <th>tecnico_comer_primaria</th>
                    <th>media_sup_tecnico_comer_secundaria</th>
                    <th>media_sup_prepa_bachillerato</th>
                    <th>normal_basica</th>
                    <th>sup_tecnico_comer_prepa</th>
                    <th>sup_licenciatura</th>
                    <th>sup_posgrado</th>
                    <th>no_especificado</th>


                </tr>
                @foreach($educacion as $ed)
                <tr>
                    <td>{{ $ed->cve_geo }}</td>
                    <td>{{ $ed->sexo }}</td>
                    <td>{{ $ed->gpo_edad}}</td>
                    <td>{{ $ed->pob_3_anios_y_mas}}</td>
                    <td>{{ $ed->sin_escolaridad}}</td>
                    <td>{{ $ed->basico_preescolar}}</td>
                    <td>{{ $ed->basico_primaria}}</td>
                    <td>{{ $ed->basico_secundaria}}</td>
                    <td>{{ $ed->tecnico_comer_primaria}}</td>
                    <td>{{ $ed->media_sup_tecnico_comer_secundaria}}</td>
                    <td>{{ $ed->media_sup_prepa_bachillerato}}</td>
                    <td>{{ $ed->normal_basica}}</td>
                    <td>{{ $ed->sup_tecnico_comer_prepa}}</td>
                    <td>{{ $ed->sup_licenciatura}}</td>
                    <td>{{ $ed->sup_posgrado}}</td>
                    <td>{{ $ed->no_especificado}}</td>
                    
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