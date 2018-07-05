<div class="form-group">	
    {{ Form::label($name or 'options', $label or 'Opciones', ['class' => 'control-label']) }}

	<br>

	@foreach($items as $key => $value)

		<label>
			{{ Form::radio($name or 'options', $key) }}
			{{ $value }} &nbsp;	
		</label>
		
	@endforeach
</div>