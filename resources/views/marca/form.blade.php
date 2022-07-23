<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group mb-3">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $marca->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $marca->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary text-white mt-2">Guardar</button>
    </div>
</div>