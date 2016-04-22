@extends('default')

@section('content')
    {!! Form::open(['route' => 'users.store']) !!}
    <div class="form-group">
        {!! Form::label('firstname', 'First Name') !!}
        {!! Form::text('firstname', '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('lastname', 'Last Name') !!}
        {!! Form::text('lastname', '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('mail', 'Mail') !!}
        {!! Form::text('mail', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('ville', 'Ville') !!}
        {!! Form::text('ville', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('npa', 'Npa') !!}
        {!! Form::number('npa', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('rue', 'Rue') !!}
        {!! Form::text('rue', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('numrue', 'Num Rue') !!}
        {!! Form::number('numrue', '',['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pseudo', 'Pseudo') !!}
        {!! Form::text('pseudo', '', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('submit', ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}



@stop




