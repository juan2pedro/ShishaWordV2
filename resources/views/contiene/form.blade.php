<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('mezcla_id') }}
            {{ Form::text('mezcla_id', $contiene->mezcla_id, ['class' => 'form-control' . ($errors->has('mezcla_id') ? ' is-invalid' : ''), 'placeholder' => 'Mezcla Id']) }}
            {!! $errors->first('mezcla_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sabore_id') }}
            {{ Form::text('sabore_id', $contiene->sabore_id, ['class' => 'form-control' . ($errors->has('sabore_id') ? ' is-invalid' : ''), 'placeholder' => 'Sabore Id']) }}
            {!! $errors->first('sabore_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('porcentaje') }}
            {{ Form::text('porcentaje', $contiene->porcentaje, ['class' => 'form-control' . ($errors->has('porcentaje') ? ' is-invalid' : ''), 'placeholder' => 'Porcentaje']) }}
            {!! $errors->first('porcentaje', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>