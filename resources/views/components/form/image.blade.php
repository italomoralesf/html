<div class="form-group">
    {{ Form::label($name ?: 'file', $label ?: 'Imagen', ['class' => 'control-label']) }}
    {{ Form::file($name ?: 'file', $attributes ?: []) }}
</div>