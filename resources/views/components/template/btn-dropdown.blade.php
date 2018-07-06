<div class="btn-group">

    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        {{ $slot or 'Opciones' }} <span class="caret"></span>
    </button>

    <ul class="dropdown-menu">
        
        @foreach ($links as $route => $text)
        
        <li><a href="{{ $route }}">{{ $text }}</a></li>

        @endforeach

    </ul>
</div>