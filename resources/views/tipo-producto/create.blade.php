@extends('layouts.app')

@section('template_title')
    Create Tipo Producto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <a class="btn btn-primary text-white" href="{{ route('tipo-productos.index') }}"> Volver</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipo-productos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipo-producto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
