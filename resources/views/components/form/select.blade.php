<div class="form-group">
    {{ Form::label($name ?: 'select', $label ?: 'Seleccione', ['class' => 'control-label']) }}
    {{ Form::select($name ?: 'select', $items, null, array_merge(['class' => 'form-control'], $attributes ?: [])) }}
</div>