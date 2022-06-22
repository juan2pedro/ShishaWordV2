<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('materiale_id') }}
            {{ Form::select('materiale_id',$materiales, $disponible->materiale_id, ['class' => 'form-control' . ($errors->has('materiale_id') ? ' is-invalid' : ''), 'placeholder' => 'Materiale Id']) }}
            {!! $errors->first('materiale_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo_id') }}
            {{ Form::select('modelo_id',$modelos, $disponible->modelo_id, ['class' => 'form-control' . ($errors->has('modelo_id') ? ' is-invalid' : ''), 'placeholder' => 'Modelo Id']) }}
            {!! $errors->first('modelo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>