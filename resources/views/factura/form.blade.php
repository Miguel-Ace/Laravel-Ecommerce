<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::select('id_producto', $productos ,$factura->id_producto, ['class' => 'form-control' . ($errors->has('id_producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('id_producto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary text-white mt-2">Guardar</button>
    </div>
</div>