{{ Form::open(array_merge(['route' => $route ?: '/s', 'method' => 'GET'], $attributes ?: []) }}
	
	{{ Form::search($name ?: 'search', null, ['class' => 'form-control', 'placeholder' => 'Buscador...']) }}

{{ Form::close() }}