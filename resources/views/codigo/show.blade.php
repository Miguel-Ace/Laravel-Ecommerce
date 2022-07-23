@extends('layouts.app')

@section('template_title')
    {{ $codigo->name ?? 'Show Codigo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Código</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary text-white mt-2" href="{{ route('codigos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $codigo->codigo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
