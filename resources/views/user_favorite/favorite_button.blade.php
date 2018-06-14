    @if (Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route' => ['userfavorite.unfavorites', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-default btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['userfavorite.favorites', $micropost->id]]) !!}
            {!! Form::submit('favorite', ['class' => "btn btn-success btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
