<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('código') }}
            {{ Form::text('codigo', $codigo->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Código']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary text-white mt-2">Guardar</button>
    </div>
</div>