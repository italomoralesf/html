<div class="form-group">	
    {{ Form::label($name ?: 'option', $label ?: 'Opciones', ['class' => 'control-label']) }}

	<br>

	@foreach($items as $key => $value)

		<label>
			{{ Form::radio($name ?: 'option', $key) }}
			{{ $value }} &nbsp;	
		</label>
		
	@endforeach
</div>