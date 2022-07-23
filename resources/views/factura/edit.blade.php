@extends('layouts.app')

@section('template_title')
    Update Factura
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <a class="btn btn-primary text-white mt-2" href="{{ route('facturas.index') }}"> Volver</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('facturas.update', $factura->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('factura.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
