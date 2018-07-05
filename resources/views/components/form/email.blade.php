<div class="form-group">
    {{ Form::label('email', $label ?: 'Email', ['class' => 'control-label']) }}
    {{ Form::email('email', null, array_merge(['class' => 'form-control'], $attributes ?: [])) }}
</div>