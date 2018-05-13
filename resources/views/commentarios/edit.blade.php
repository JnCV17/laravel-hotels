@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Commentario
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($commentario, ['route' => ['commentarios.update', $commentario->id], 'method' => 'patch']) !!}

                        @include('commentarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection