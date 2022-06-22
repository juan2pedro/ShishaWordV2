<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('formato_id') }}
            {{ Form::select('formato_id', $formatos ,$empaquetado->formato_id, ['class' => 'form-control' . ($errors->has('formato_id') ? ' is-invalid' : ''), 'placeholder' => 'Formato Id']) }}
            {!! $errors->first('formato_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sabore_id') }}
            {{ Form::select('sabore_id', $sabores, $empaquetado->sabore_id, ['class' => 'form-control' . ($errors->has('sabore_id') ? ' is-invalid' : ''), 'placeholder' => 'Sabore Id']) }}
            {!! $errors->first('sabore_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>