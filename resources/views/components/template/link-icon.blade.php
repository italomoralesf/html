<a 

	href="{{ $route }}" 

	class="btn btn-{{ $color or 'link'}} btn-{{ $size or 'sm' }}"

>

	<span class="fa fa-{{ $icon }}"></span>
	
	{{ $slot or '' }}
	
</a>