<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $marca->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pais') }}
            {{ Form::text('pais', $marca->pais, ['class' => 'form-control' . ($errors->has('pais') ? ' is-invalid' : ''), 'placeholder' => 'Pais']) }}
            {!! $errors->first('pais', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto') }}
            {{ Form::text('contacto', $marca->contacto, ['class' => 'form-control' . ($errors->has('contacto') ? ' is-invalid' : ''), 'placeholder' => 'Contacto']) }}
            {!! $errors->first('contacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sitioWeb') }}
            {{ Form::text('sitioWeb', $marca->sitioWeb, ['class' => 'form-control' . ($errors->has('sitioWeb') ? ' is-invalid' : ''), 'placeholder' => 'Sitioweb']) }}
            {!! $errors->first('sitioWeb', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>