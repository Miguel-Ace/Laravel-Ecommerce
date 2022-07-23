@extends('layouts.app')

@section('template_title')
    Create Producto
@endsection

@section('content')
    <h1 class="text-center">Crea Tu Producto</h1>
    <section class="content container col-md-8 fs-5">
        <div class="row ">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="background-color: #CCD1D1;">
                    <div class="card-header">
                        <a class="btn btn-primary text-white mt-2" href="{{ url('/') }}"> Catálogo productos</a>
                        <a class="btn btn-primary text-white mt-2" href="{{ url('productos') }}"> Inventario</a>
                    </div>
                    <div class="card-body bg-light">
                        <form method="POST" action="{{ url('productos') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            {{-- @include('producto.form') --}}

                            <div class="mb-3">
                                <label for="name" class="form-label">Titulo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                                @error('nombre')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <textarea class="form-control" placeholder="Describe tu producto" id="descripcion" name="descripcion" style="height: 100px"></textarea>
                                @error('descripcion')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" class="form-control" min="1.00" step="0.01" id="precio" name="precio">
                                @error('precio')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror
                            </div>
                            
                            <select class="form-select mb-3" name="id_marca">
                                <option selected>Seleccione una marca</option>
                                @foreach ($marcas as $marca)
                                    <option value="{{$marca->id}}">{{$marca->marca}}</option>
                                @endforeach
                                {{-- @error('id_marca')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror --}}
                            </select>

                            <select class="form-select mb-3" name="id_categoria">
                                <option selected>Seleccione una categoria</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                                @endforeach
                                {{-- @error('id_categoria')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror --}}
                            </select>
                            
                            <select class="form-select mb-3" name="id_tipo_producto">
                                <option selected>Seleccione el tipo de producto</option>
                                @foreach ($tipo_productos as $tipo_producto)
                                    <option value="{{$tipo_producto->id}}">{{$tipo_producto->tipo_producto}}</option>
                                @endforeach
                                {{-- @error('id_tipo_producto')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror --}}
                            </select>

                            <select class="form-select mb-3" name="id_codigo">
                                <option selected>Seleccione el código del producto</option>
                                @foreach ($codigos as $codigo)
                                    <option value="{{$codigo->id}}">{{$codigo->codigo}}</option>
                                @endforeach
                                {{-- @error('id_codigo')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror --}}
                            </select>


                            <select class="form-select mb-3" name="stock">
                                <option selected>Seleccione el stock del producto</option>
                                <option  value="Existencia">Existencia</option>
                                <option  value="Agotado">Agotado</option>
                                @error('stock')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror
                            </select>

                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input type="file" class="form-control" id="imagen" name="imagen">
                                @error('imagen')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="imagen_dos" class="form-label">Segunda Imagen</label>
                                <input type="file" class="form-control" id="imagen_dos" name="imagen_dos">
                                @error('imagen_dos')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="imagen_tres" class="form-label">Tercera Imagen</label>
                                <input type="file" class="form-control" id="imagen_tres" name="imagen_tres">
                                @error('imagen_tres')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="imagen_cuatro" class="form-label">Cuarta Imagen</label>
                                <input type="file" class="form-control" id="imagen_cuatro" name="imagen_cuatro">
                                @error('imagen_cuatro')
                                    <small>
                                        <strong>{{$message}}</strong>
                                    </small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary text-white">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
