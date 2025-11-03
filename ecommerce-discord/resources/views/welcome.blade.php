@extends('layouts.app')

@section('title', 'Inicio - E-commerce Discord')

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-12 text-center py-5 bg-gradient rounded" style="background: linear-gradient(135deg, #5865F2 0%, #4752C4 100%);">
            <h1 class="display-4 text-white fw-bold mb-3">Bienvenido a E-commerce Discord</h1>
            <p class="lead text-white mb-4">Las mejores claves, servicios y plantillas para Discord</p>
            <a href="{{ url('/productos') }}" class="btn btn-light btn-lg">Ver Productos</a>
        </div>
    </div>

    <!-- Categorías -->
    <div class="row mb-5">
        <div class="col-12 mb-4">
            <h2 class="text-center">Categorías Destacadas</h2>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-product h-100">
                <div class="card-body text-center">
                    <i class="bi bi-key-fill text-primary" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Claves de Software</h5>
                    <p class="card-text">Discord Nitro, licencias digitales y más</p>
                    <a href="#" class="btn btn-discord">Ver Claves</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-product h-100">
                <div class="card-body text-center">
                    <i class="bi bi-code-slash text-success" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Servicios de Programación</h5>
                    <p class="card-text">Bots personalizados y desarrollos custom</p>
                    <a href="#" class="btn btn-discord">Ver Servicios</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-product h-100">
                <div class="card-body text-center">
                    <i class="bi bi-file-earmark-code text-warning" style="font-size: 3rem;"></i>
                    <h5 class="card-title mt-3">Plantillas</h5>
                    <p class="card-text">Plantillas de servidores y recursos descargables</p>
                    <a href="#" class="btn btn-discord">Ver Plantillas</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Productos Destacados (placeholder) -->
    <div class="row">
        <div class="col-12 mb-4">
            <h2 class="text-center">Productos Destacados</h2>
        </div>
        <div class="col-12 text-center text-muted">
            <p>Los productos se mostrarán aquí una vez configurada la base de datos</p>
        </div>
    </div>
</div>
@endsection