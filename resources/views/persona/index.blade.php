@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#tablaPersonas').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('personas.datatable') }}", // Ruta para cargar los datos vía Ajax
            "columns": [
                { "data": "nombre" },
                { "data": "apellidos" },
                { "data": "carnet" },
                // Agrega más columnas según sea necesario
            ]
        });
    });
</script>
@stop

