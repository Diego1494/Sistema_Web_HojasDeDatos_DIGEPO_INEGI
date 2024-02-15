@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
   <div class="row">
        <form action="{{ route('importar')}}" method="POST" enctype="multipart/form-data">
               @csrf
            <div class="col-md-6">
                <input type="file" name="documento" id="archivoInput" accept=".csv">
            </div>
        </form>
    </div>
<button class="btn btn-primary" type="submit">Importar </button>
<a class="btn btn-danger float-end" href="{{ route('exportar') }}">Exportar</a>

<table class="table" id="seleccionado-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>cve_geo</th>
                    <th>rel_hombre_mujer</th>
                    <th>r_dep_total</th>
                    <th>r_dep_infatil</th>
                    <th>r_dep_vejez</th>
                </tr>
            </thead>
        </table>
</div>
@stop

@section('css')
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#seleccionado-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('get.seleccionado.data') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'cve_geo', name: 'cve_geo' },
                    { data: 'rel_hombre_mujer', name: 'rel_hombre_mujer' },
                    { data: 'r_dep_total', name: 'r_dep_total' },
                    { data: 'r_dep_infatil', name: 'r_dep_infatil' },
                    { data: 'r_dep_vejez', name: 'r_dep_vejez' },
                ]
            });
        });
    </script>
      <script>
document.getElementById('archivoInput').addEventListener('change', function() {
    var archivoInput = this;
    var archivo = archivoInput.files[0];

    if (archivo && archivo.name) {
        var extension = archivo.name.split('.').pop().toLowerCase();
        if (extension !== 'csv') {
            alert('Por favor, seleccione un archivo con extensión CSV.');
            // Restablecer el valor del input para que el usuario pueda seleccionar otro archivo
            document.getElementById('formularioImportacion').reset();
        }
    }
});
</script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https:////cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
@stop