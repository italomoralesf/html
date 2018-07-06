<p class="btn-group">
 	
 	@foreach ($buttons as $route => $text)

	<a href="{{ $route }}" class="btn btn-{{ $color or 'default' }} btn-{{ $size or 'sm' }}">
		{{ $text }}
	</a>

  	@endforeach

</p>