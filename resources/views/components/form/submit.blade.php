{{ Form::submit($label ?: 'Enviar', array_merge(
	['class' => "btn btn-$color ?: 'primary'"], 
	$attributes ?: []) 
}}