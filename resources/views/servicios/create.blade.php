@extends('layouts.base')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

<!-- Vista para Crear un Nuevo Servicio -->
<section class="crear-servicio">
    <h1><strong>Nuevo Servicio</strong></h1>

    @if( sizeof($errors)>0 )
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('servicios.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Servicio</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del servicio" aria-describedby="nombreHelp" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese una descripción del servicio" aria-describedby="descripcionHelp" required></textarea>
        </div>

        <div class="mb-3">
            <label for="duracion" class="form-label">Duración</label>
            <input type="number" step="1" class="form-control" id="duracion" name="duracion" placeholder="Ingrese la duracion del servicio en minutos" aria-describedby="duracionHelp" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.50" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del servicio" aria-describedby="precioHelp" required>
        </div>

        <div class="mb-3">
            <label for="disponibilidad" class="form-label">Disponibilidad</label>
            <select class="form-control" name="disponibilidad" id="disponibilidad" aria-describedby="disponibilidadHelp" >
                <option value="1">Disponible</option>
                <option value="0">No Disponible</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Servicio</button>
        <button type="reset" class="btn btn-warning">Limpiar Formulario</button>
        <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</section>
@endsection
