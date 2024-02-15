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
<a class="btn btn-danger float-end" href="{{ route('exportarED') }}">Exportar</a>
<table class="table" id="educacion-table">
            <thead>
                <tr>
                    <th>ID</th>
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
            $('#educacion-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('get.educacion.data') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'cve_geo', name: 'cve_geo' },
                    { data: 'sexo', name: 'sexo' },
                    { data: 'gpo_edad', name: 'gpo_edad' },
                    { data: 'pob_3_anios_y_mas', name: 'pob_3_anios_y_mas' },
                    { data: 'sin_escolaridad', name: 'sin_escolaridad' },
                    { data: 'basico_preescolar', name: 'basico_preescolar' },
                    { data: 'basico_primaria', name: 'basico_primaria' },
                    { data: 'basico_secundaria', name: 'basico_secundaria' },
                    { data: 'tecnico_comer_primaria', name: 'tecnico_comer_primaria' },
                    { data: 'media_sup_tecnico_comer_secundaria', name: 'media_sup_tecnico_comer_secundaria' },
                    { data: 'media_sup_prepa_bachillerato', name: 'media_sup_prepa_bachillerato' },
                    { data: 'normal_basica', name: 'normal_basica' },
                    { data: 'sup_tecnico_comer_prepa', name: 'sup_tecnico_comer_prepa' },
                    { data: 'sup_licenciatura', name: 'sup_licenciatura' },
                    { data: 'sup_posgrado', name: 'sup_posgrado' },
                    { data: 'no_especificado', name: 'no_especificado' },
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
