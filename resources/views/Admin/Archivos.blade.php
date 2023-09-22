<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Archivos</title>
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
                        Vivienda
                        <a class="btn btn-danger float-end" href="{{ route('exportar') }}">Exportar</a>
                    </th>
                </tr>
                <tr>
                    <th>cvgeo</th>
                    <th>viviendas_habitadas</th>
                    <th>aguaentubada_dispone</th>
                </tr>
                @foreach($vivienda as $viviendas)
                <tr>
                    <td>{{ $viviendas->cvgeo }}</td>
                    <td>{{ $viviendas->viviendas_habitadas }}</td>
                    <td>{{ $viviendas->aguaentubada_dispone }}</td>
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