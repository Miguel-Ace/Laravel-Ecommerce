@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary text-white mt-2" href="{{ url('/') }}"> Catálogo productos</a>
                            
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="container d-flex gap-5">
                            <div class="izq" style="border: 1px solid rgb(196, 190, 190); border-radius: 1rem">
                                <img src="{{asset('storage/'.$producto->imagen)}}" width="300" alt="">
                            </div>
                            
                            <div class="der w-100">
                                <h1>{{ $producto->nombre }}</h1>

                                <p class="fs-5"><strong>Categoria:</strong> {{ $producto->categoria->categoria }}</p>
                                
                                <hr>
                                <hr>
                                
                                <p class="fs-5">{{ $producto->descripcion }}</p>
  
                                <div id="carouselExampleControlsNoTouching" class="carousel slide w-50" data-bs-touch="false" data-bs-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img src="{{asset('storage/'.$producto->imagen_dos)}}" class="d-block w-50" alt="..." style="height: 250px; width: 250px">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{asset('storage/'.$producto->imagen_tres)}}" class="d-block w-50" alt="..." style="height: 250px; width: 250px">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{asset('storage/'.$producto->imagen_cuatro)}}" class="d-block w-50" alt="..." style="height: 250px; width: 250px">
                                      </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>

                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <p class="fs-5"><strong>Venta: C$ {{ $producto->precio }}</strong>+ IVA</p>
                                <a class="btn btn-primary text-white mt-2" href="{{ route('productos.index') }}"> Añadir al carrito</a>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <strong>Imagen:</strong>
                            <img src="{{asset('storage/'.$producto->imagen)}}" width="100" alt="">
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Id Marca:</strong>
                            {{ $producto->id_marca }}
                        </div>
                        <div class="form-group">
                            <strong>Id Categoria:</strong>
                            {{ $producto->id_categoria }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Producto:</strong>
                            {{ $producto->id_tipo_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Id Codigo:</strong>
                            {{ $producto->id_codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $producto->stock }}
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
