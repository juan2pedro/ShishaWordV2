<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('formato_id') }}
            {{ Form::text('formato_id', $empaquetado->formato_id, ['class' => 'form-control' . ($errors->has('formato_id') ? ' is-invalid' : ''), 'placeholder' => 'Formato Id']) }}
            {!! $errors->first('formato_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sabore_id') }}
            {{ Form::text('sabore_id', $empaquetado->sabore_id, ['class' => 'form-control' . ($errors->has('sabore_id') ? ' is-invalid' : ''), 'placeholder' => 'Sabore Id']) }}
            {!! $errors->first('sabore_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>