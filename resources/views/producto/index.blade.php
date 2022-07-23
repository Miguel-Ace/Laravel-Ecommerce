@extends('layouts.app')

@section('template_title')
    Producto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <a class="btn btn-primary text-white mt-2" href="{{ url('/') }}"> Catálogo productos</a>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right text-white"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Imagen</th>
										<th>Imagen 2</th>
										<th>Imagen 3</th>
										<th>Imagen 4</th>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Marca</th>
										<th>Categoria</th>
										<th>Tipo Producto</th>
										<th>Codigo</th>
										<th>Precio</th>
										<th>Stock</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            {{-- <td>{{ ++$i }}</td> --}}
                                            <td>{{ $producto->id }}</td>
                                            
											<td>
                                                <img src="{{asset('storage/'.$producto->imagen)}}" width="100" alt="">
                                                {{-- {{ $producto->imagen }} --}}
                                            </td>
											<td>
                                                <img src="{{asset('storage/'.$producto->imagen_dos)}}" width="100" alt="">
                                                {{-- {{ $producto->imagen }} --}}
                                            </td>
											<td>
                                                <img src="{{asset('storage/'.$producto->imagen_tres)}}" width="100" alt="">
                                                {{-- {{ $producto->imagen }} --}}
                                            </td>
											<td>
                                                <img src="{{asset('storage/'.$producto->imagen_cuatro)}}" width="100" alt="">
                                                {{-- {{ $producto->imagen }} --}}
                                            </td>
											<td>{{ $producto->nombre }}</td>
											<td>{{ $producto->descripcion }}</td>
											<td>{{ $producto->marca->marca }}</td>
											<td>{{ $producto->categoria->categoria }}</td>
											<td>{{ $producto->tipoProducto->tipo_producto }}</td>
											<td>{{ $producto->codigo->codigo }}</td>
											<td>{{ $producto->precio }}</td>
											<td>{{ $producto->stock }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary text-white d-block" href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success d-block" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm d-block w-100"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
