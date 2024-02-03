<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Poblacion Proyecciones Archivos</title>
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
                        Poblacion Proyecciones
                        <a class="btn btn-danger float-end" href="{{ route('exportarPY') }}">Exportar</a>
                    </th>
                </tr>
                <tr>
                    <th>cvegeo</th>
                    <th>ph2016</th>
                    <th>pm2016</th>
                    <th>pt2016</th>
                    <th>ph2022</th>
                    <th>pm2022</th>
                    <th>pt2022</th>
		
                </tr>
                @foreach($poblacionproyecciones as $poys)
                <tr>
                    <td>{{ $poys->cvegeo }}</td>
                    <td>{{ $poys->ph2016 }}</td>
                    <td>{{ $poys->pm2016}}</td>
                    <td>{{ $poys->pt2016}}</td>
                    <td>{{ $poys->ph2022 }}</td>
                    <td>{{ $poys->pm2022}}</td>
                    <td>{{ $poys->pt2022}}</td>
                    
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