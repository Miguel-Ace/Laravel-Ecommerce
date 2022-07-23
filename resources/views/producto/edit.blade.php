@extends('layouts.app')

@section('template_title')
    Update Producto
@endsection

@section('content')
    <h1 class="text-center">Editar Producto
        ({{$producto->nombre}})
    </h1>
    <section class="content container col-md-8 fs-5">
        <div class="">
            <div class="col-md-12">
                {{$errors}}
                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <a class="btn btn-primary text-white mt-2" href="{{ route('productos.index') }}"> Volver</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('productos/'.$producto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            {{-- @include('producto.form') --}}

                            <div class="mb-3">
                                <label for="name" class="form-label">Titulo</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto->nombre}}">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Descripción</label>
                                <textarea class="form-control" placeholder="Describe tu producto" id="descripcion" name="descripcion" style="height: 100px">{{$producto->descripcion}}</textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio</label>
                                <input type="number" class="form-control" id="precio" name="precio" value="{{$producto->precio}}">
                            </div>
                            
                            <label for="" class="form-label">Marca</label>
                            <select class="form-select mb-3" name="id_marca">
                                <option selected>Seleccione una marca</option>
                                @foreach ($marcas as $marca)
                                    @if ($marca->id === $producto->marca->id)
                                        <option selected value="{{$marca->id}}">{{$marca->marca}}</option>    
                                    @else
                                        <option value="{{$marca->id}}">{{$marca->marca}}</option>
                                    @endif
                                @endforeach
                            </select>

                            <label for="" class="form-label">Categoria</label>
                            <select class="form-select mb-3" name="id_categoria">
                                <option selected>Seleccione una categoria</option>
                                @foreach ($categorias as $categoria)
                                    @if ($categoria->id === $producto->categoria->id)
                                        <option selected value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                                    @else
                                        <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>    
                                    @endif
                                @endforeach
                            </select>
                            
                            <label for="" class="form-label">Tipo de producto</label>
                            <select class="form-select mb-3" name="id_tipo_producto">
                                <option selected>Seleccione el tipo de producto</option>
                                @foreach ($tipo_productos as $tipo_producto)
                                    @if ($tipo_producto->id === $producto->tipoProducto->id)
                                        <option selected value="{{$tipo_producto->id}}">{{$tipo_producto->tipo_producto}}</option>
                                    @else
                                        <option value="{{$tipo_producto->id}}">{{$tipo_producto->tipo_producto}}</option>
                                    @endif
                                @endforeach
                            </select>

                            <label for="" class="form-label">Código Producto</label>
                            <select class="form-select mb-3" name="id_codigo">
                                <option selected>Seleccione el código del producto</option>
                                @foreach ($codigos as $codigo)
                                    @if ($codigo->id === $producto->codigo->id)
                                    <option selected value="{{$codigo->id}}">{{$codigo->codigo}}</option>
                                    @else
                                    <option value="{{$codigo->id}}">{{$codigo->codigo}}</option>
                                    @endif
                                @endforeach
                            </select>

                            <label for="" class="form-label">Stock</label>
                            <select class="form-select mb-3" name="stock">
                                <option selected>Seleccione el stock del producto</option>
                                <option {{$producto->stock == 'Existencia' ? 'selected' : ''}} value="Existencia">Existencia</option>
                                <option {{$producto->stock == 'Agotado' ? 'selected' : ''}} value="Agotado">Agotado</option>
                            </select>

                            <div class="mb-3">
                                {{-- <label for="imagen" class="form-label">Imagen</label> --}}
                                <img src="{{asset('storage/'.$producto->imagen)}}" width="300" alt="">
                                <input type="file" class="form-control" id="imagen" name="imagen">
                            </div>

                            <div class="mb-3">
                                {{-- <label for="imagen" class="form-label">Imagen</label> --}}
                                <img src="{{asset('storage/'.$producto->imagen_dos)}}" width="300" alt="">
                                <input type="file" class="form-control" id="imagen_dos" name="imagen_dos">
                            </div>

                            <div class="mb-3">
                                {{-- <label for="imagen" class="form-label">Imagen</label> --}}
                                <img src="{{asset('storage/'.$producto->imagen_tres)}}" width="300" alt="">
                                <input type="file" class="form-control" id="imagen_tres" name="imagen_tres">
                            </div>

                            <div class="mb-3">
                                {{-- <label for="imagen" class="form-label">Imagen</label> --}}
                                <img src="{{asset('storage/'.$producto->imagen_cuatro)}}" width="300" alt="">
                                <input type="file" class="form-control" id="imagen_cuatro" name="imagen_cuatro">
                            </div>
                            <button type="submit" class="btn btn-primary text-white">Guardar</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
