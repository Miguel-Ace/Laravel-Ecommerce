<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipo_producto') }}
            {{ Form::text('tipo_producto', $tipoProducto->tipo_producto, ['class' => 'form-control' . ($errors->has('tipo_producto') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Producto']) }}
            {!! $errors->first('tipo_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary text-white mt-2">Guardar</button>
    </div>
</div>