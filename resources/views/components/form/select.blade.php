<div class="form-group">
    {{ Form::label($name or 'select', $label or 'Seleccione', ['class' => 'control-label']) }}
    {{ Form::select($name or 'select', $items, null, array_merge(['class' => 'form-control'], $attributes or [])) }}
</div>