{{ Form::open(['route' => $route, 'method' => 'GET']) }}
	
	{{ Form::search($name, null, ['class' => 'form-control input-sm', 'placeholder' => 'Buscador...']) }}

{{ Form::close() }}