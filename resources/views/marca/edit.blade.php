@extends('layouts.app')

@section('template_title')
    Update Marca
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <a class="btn btn-primary text-white" href="{{ route('marcas.index') }}"> Volver</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('marcas.update', $marca->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('marca.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
