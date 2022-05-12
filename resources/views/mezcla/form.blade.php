<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('detalles') }}
            {{ Form::text('detalles', $mezcla->detalles, ['class' => 'form-control' . ($errors->has('detalles') ? ' is-invalid' : ''), 'placeholder' => 'Detalles']) }}
            {!! $errors->first('detalles', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>