<div class="alert alert-{{ $color or 'warning' }} alert-dismissible">
	
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  		<span aria-hidden="true">&times;</span>
	</button>
    
    {{ $slot }}

</div>