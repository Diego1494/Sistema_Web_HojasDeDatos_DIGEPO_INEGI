<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Poblacion Seleccionado Archivos</title>
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
                        Poblacion Seleccionado
                        <a class="btn btn-danger float-end" href="{{ route('exportar') }}">Exportar</a>
                    </th>
                </tr>
                <tr>
                    <th>cve_geo</th>
                    <th>rel_hombre_mujer</th>
                    <th>r_dep_total</th>
                    <th>r_dep_infatil</th>
                    <th>r_dep_vejez</th>
		
                </tr>
                @foreach($poblacionselec as $pobs)
                <tr>
                    <td>{{ $pobs->cve_geo }}</td>
                    <td>{{ $pobs->rel_hombre_mujer }}</td>
                    <td>{{ $pobs->r_dep_total }}</td>
                    <td>{{ $pobs->r_dep_infantil}}</td>
                    <td>{{ $pobs->r_dep_vejez }}</td>
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