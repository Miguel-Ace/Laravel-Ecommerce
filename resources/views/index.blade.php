@extends('layouts.app')

@section('content')
<div class="container w-100">
{{-- Inicio Carrusel --}}
<div class="carrusel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/tercero.png')}}" class="d-block w-100" alt="..." style="height: 250px">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/segundo.png')}}" class="d-block w-100" alt="..." style="height: 250px">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/primero.png')}}" class="d-block w-100" alt="..." style="height: 250px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
{{-- Fin Carrusel --}}

{{-- Inicio Cuerpo --}}
    <h1 class="text-center mt-3">Productos Destacados</h1>
    <div class="cards">
        <div class="d-flex flex-row bd-highlight mb-3 flex-wrap justify-content-between">
            @foreach ($productos as $producto)
                <div class="p-2 bd-highlight" >
                    <div class="content_img">
                        <img src="{{asset('storage/'.$producto->imagen)}}" width="300" alt="" style="height: 250px; width: 250px">
                    </div>
                    <div class="titulo text-center fs-5">
                        <p>{{$producto->nombre}}</p>
                    </div>
                    <div class="btns">
                        <a href="#" class="btn btn-outline-warning d-block">Agregar al carrito</a>
                        <a href="{{ route('productos.show',$producto->id) }}" class="btn btn-outline-success d-block mt-1">Ver</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
{{-- Fin Cuerpo --}}

@endsection
