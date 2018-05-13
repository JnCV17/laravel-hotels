<table class="table table-responsive" id="commentarios-table">
    <thead>
        <tr>
            <th>Contenido</th>
        <th>Id Usuario</th>
        <th>Id Hotel</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($commentarios as $commentario)
        <tr>
            <td>{!! $commentario->contenido !!}</td>
            <td>{!! $commentario->id_usuario !!}</td>
            <td>{!! $commentario->id_hotel !!}</td>
            <td>
                {!! Form::open(['route' => ['commentarios.destroy', $commentario->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('commentarios.show', [$commentario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('commentarios.edit', [$commentario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>