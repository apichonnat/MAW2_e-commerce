@extends('layouts.app')

@section('content')
    <div style="width: 1024px;">
        {!! Form::open(['route' => 'articles.store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titre') !!}
            {!! Form::text('title', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('subtitle', 'Sous-Titre') !!}
            {!! Form::text('subtitle', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Déscription') !!}
            {!! Form::text('description', '', ['class' => 'form-control']) !!}
        </div>
            {!! Form::select('size', $list_des_trucs) !!}





        <div class="form-group">
            {!! Form::submit('Crée', ['class' => 'btn btn-default']) !!}
        </div>
        {!! Form::close() !!}
    </div>



@stop




