<li class="{{ Request::is('hotels*') ? 'active' : '' }}">
    <a href="{!! route('hotels.index') !!}"><i class="fa fa-edit"></i><span>Hotels</span></a>
</li>

<li class="{{ Request::is('commentarios*') ? 'active' : '' }}">
    <a href="{!! route('commentarios.index') !!}"><i class="fa fa-edit"></i><span>Commentarios</span></a>
</li>

