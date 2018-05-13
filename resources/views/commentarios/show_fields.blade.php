<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $commentario->id !!}</p>
</div>

<!-- Contenido Field -->
<div class="form-group">
    {!! Form::label('contenido', 'Contenido:') !!}
    <p>{!! $commentario->contenido !!}</p>
</div>

<!-- Id Usuario Field -->
<div class="form-group">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    <p>{!! $commentario->id_usuario !!}</p>
</div>

<!-- Id Hotel Field -->
<div class="form-group">
    {!! Form::label('id_hotel', 'Id Hotel:') !!}
    <p>{!! $commentario->id_hotel !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $commentario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $commentario->updated_at !!}</p>
</div>

