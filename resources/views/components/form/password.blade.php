<div class="form-group">
    {{ Form::label('password', $label ?: 'Contraseña', ['class' => 'control-label']) }}
    {{ Form::password('password', ['class' => 'form-control', 'required']) }}
</div>