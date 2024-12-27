@extends('layouts.base')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

<!-- Sección de Servicios -->
<section class="servicios">
    <h2>Servicios Disponibles</h2>
    
    <!-- Botón para crear un nuevo servicio -->
    <a href="{{ route('servicios.create') }}" class="btn btn-primary">Nuevo Servicio</a>
    
    <!-- Tabla de Servicios -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id }}</td>
                <td>{{ $servicio->nombre }}</td>
                <td>{{ $servicio->descripcion }}</td>
                <td>{{ $servicio->precio }}</td>
                <td>
                    <!-- Botones de editar y eliminar -->
                    <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection
