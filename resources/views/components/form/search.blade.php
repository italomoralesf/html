{{ Form::open(array_merge(['route' => $route or '/s', 'method' => 'GET'], $attributes or []) }}
	
	{{ Form::search($name or 'search', null, ['class' => 'form-control', 'placeholder' => 'Buscador...']) }}

{{ Form::close() }}