@extends('layouts.base')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

<!-- Sección del logotipo -->
<section class="hero">
    <div class="logo-container">
        <img src="{{ asset('img/logo_barberia.jpg') }}" alt="Logotipo de la Barbería" class="logo">
    </div>
    <h1 class="bienvenida">¡Bienvenido a Barber Shop Moshan!</h1>
    <p class="descripcion">Tu lugar para un corte de calidad, estilo y relajación. Ven y disfruta de un servicio premium.</p>
</section>

@endsection
