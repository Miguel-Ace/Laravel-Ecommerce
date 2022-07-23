<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group mb-3">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $producto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{ Form::label('descripcion') }}
            {{ Form::textarea('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{-- {{ Form::label('marca') }} --}}
            {{ Form::select('id_marca', $marcas, $producto->id_marca, ['class' => 'form-control' . ($errors->has('id_marca') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una marca']) }}
            {!! $errors->first('id_marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{-- {{ Form::label('categoria') }} --}}
            {{ Form::select('id_categoria', $categorias, $producto->id_categoria, ['class' => 'form-control' . ($errors->has('id_categoria') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una categoria']) }}
            {!! $errors->first('id_categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{-- {{ Form::label('tipo_producto') }} --}}
            {{ Form::select('id_tipo_producto', $tipo_productos, $producto->id_tipo_producto, ['class' => 'form-control' . ($errors->has('id_tipo_producto') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el tipo de producto']) }}
            {!! $errors->first('id_tipo_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{-- {{ Form::label('codigo') }} --}}
            {{ Form::select('id_codigo', $codigos, $producto->id_codigo, ['class' => 'form-control' . ($errors->has('id_codigo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el código del producto']) }}
            {!! $errors->first('id_codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{ Form::label('precio') }}
            {{ Form::number('precio', $producto->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-3">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $producto->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{-- <img src="{{asset('storage/'.$producto->imagen)}}" width="100" alt="">
            <input class="form-control" type="file" id="formFile" name="imagen"> --}}
            {{ Form::file('imagen', $producto->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary text-white mt-2">Guardar</button>
    </div>
</div>