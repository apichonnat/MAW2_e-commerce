@extends('layouts.app')

@section('content')
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h4><a href="{{ route('admin.articles.index')}}">Back</a></h4>
        <p><h2>Modification de contenu</h2></p>

        <p><h4>Contenu en {!! $content->language->name !!}</h4></p>
        {!! Form::open(['route' => 'admin.contents.store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Titre') !!}
            {!! Form::text('title', $content->title , ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('subtitle', 'Sous-Titre') !!}
            {!! Form::text('subtitle', $content->subtitle , ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', $content->description , ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
    <div class="col-md-2"></div>




@stop




