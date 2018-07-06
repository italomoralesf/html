<div class="form-group">
	
	<button class="btn btn-{{ $color ?: 'primary' }} btn-{{ $size or 'sm' }}">
		{{ $slot or 'Enviar' }}
	</button>

</div>