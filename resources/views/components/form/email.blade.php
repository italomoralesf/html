<div class="form-group">
    {{ Form::label('email', $label or 'Email', ['class' => 'control-label']) }}
    {{ Form::email('email', null, array_merge(['class' => 'form-control'], $attributes or [])) }}
</div>