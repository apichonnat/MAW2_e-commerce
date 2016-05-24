@extends('layouts.app')

@section('content')
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <p><h2>Ajouter une image pour l'article ""</h2></p>
        {!! Form::open(['route' => 'admin.pictures.store', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::Label('data', 'Image') !!}
            {!! Form::file('image') !!}
        </div>

        <div class="form-group">
            {!! Form::Label('desc', 'Description image') !!}
            {!! Form::text('desc', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-groupe">
            {!! Form::Label('typeImage', 'Type de limage') !!}
            {!! Form::select('typeImage', $type_media, ['class' => 'form-control']) !!}
        </div>

        {!! Form::hidden('idArticle', $idArticle) !!}

        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-md-2"></div>
@stop




