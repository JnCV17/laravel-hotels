<!-- Contenido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contenido', 'Contenido:') !!}
    {!! Form::text('contenido', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::text('id_usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Hotel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_hotel', 'Id Hotel:') !!}
    {!! Form::text('id_hotel', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('commentarios.index') !!}" class="btn btn-default">Cancel</a>
</div>
