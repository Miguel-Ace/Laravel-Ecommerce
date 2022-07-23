@extends('layouts.app')

@section('template_title')
    {{ $compra->name ?? 'Show Compra' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Compra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary text-white mt-2" href="{{ route('compras.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $compra->user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $compra->total }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $compra->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $compra->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Compra:</strong>
                            {{ $compra->fecha_compra }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
