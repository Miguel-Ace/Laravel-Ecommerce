@extends('layouts.app')

@section('template_title')
    Create Categoria
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <a class="btn btn-primary text-white mt-2" href="{{ route('categorias.index') }}"> Volver</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categorias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('categoria.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
