<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Usuario') }}
            {{ Form::select('id_users', $usuarios, $compra->id_users, ['class' => 'form-control' . ($errors->has('id_users') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un usuario']) }}
            {!! $errors->first('id_users', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::number('total', $compra->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::number('telefono', $compra->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $compra->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_compra') }}
            {{ Form::date('fecha_compra', $compra->fecha_compra, ['class' => 'form-control' . ($errors->has('fecha_compra') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Compra']) }}
            {!! $errors->first('fecha_compra', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary text-white mt-2">Guardar</button>
    </div>
</div>