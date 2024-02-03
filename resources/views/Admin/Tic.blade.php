<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>TICS Archivos</title>
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
                        TICS
                        <a class="btn btn-danger float-end" href="{{ route('exportarTic') }}">Exportar</a>
                    </th>
                </tr>
                <tr>
                    <th>cvegeo</th>
                    <th>viviendas_habitadas</th>
                    <th>compu_dispone</th>
                    <th>inter_dispone</th>
                    <th>telefono_dispone</th>
                    <th>tvcable_dispone</th>
                    <th>celu_dispone</th>
                    <th>compu_nodispone</th>
                    <th>internet_nodispone</th>
                    <th>telefono_nodispone</th>
                    <th>tvcable_nodispone</th>
                    <th>celu_nodispone</th>
                   
                </tr>
                @foreach($tic as $ti)
                <tr>
                    <td>{{ $ti->cvegeo}}</td>
                    <td>{{ $ti->viviendas_habitadas}}</td>
                    <td>{{ $ti->compu_dispone}}</td>
                    <td>{{ $ti->inter_dispone}}</td>
                    <td>{{ $ti->telefono_dispone }}</td>
                    <td>{{ $ti->tvcable_dispone }}</td>
                    <td>{{ $ti->celu_dispone}}</td>
                    <td>{{ $ti->compu_nodispone}}</td>
                    <td>{{ $ti->internet_nodispone }}</td>
                    <td>{{ $ti->telefono_nodispone }}</td>
                    <td>{{ $ti->tvcable_nodispone }}</td>
                    <td>{{ $ti->celu_nodispone}}</td>

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