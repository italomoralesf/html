<div class="form-group">
    {{ Form::label($name or 'file', $label or 'Imagen', ['class' => 'control-label']) }}
    {{ Form::file($name or 'file', $attributes or []) }}
</div>