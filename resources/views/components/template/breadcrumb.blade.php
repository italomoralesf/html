<ol class='breadcrumb'>
	<li>
		<a href="{{ route('home') }}">
			<i class='fa fa-home'></i> Inicio
		</a>
	</li>

	@foreach ($breadcrumb as $route => $text)
		
	<li><a href="{{ $route }}">{{ $text }}</a></li>

	@endforeach

	<li class='active'>{{ $slot or 'Actual' }}</li>
</ol>