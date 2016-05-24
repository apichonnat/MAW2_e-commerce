@extends('layouts.app')

@section('content')
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <p><h2>Ajouter un contenu pour un article</h2></p>
        {!! Form::open(['route' => 'admin.contents.store']) !!}

        <div class="form-group">
            {!! Form::Label('title', 'Titre') !!}
            {!! Form::text('title', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::Label('subtitle', 'Sous-titre') !!}
            {!! Form::text('subtitle', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::Label('desc', 'Description') !!}
            {!! Form::text('desc', '', ['class' => 'form-control']) !!}
        </div>


        <div class="form-groupe">
            {!! Form::Label('lang', 'Language') !!}
            {!! Form::select('lang', $language, ['class' => 'form-control']) !!}
        </div>

        {!! Form::hidden('idArticle', $idArticle) !!}

        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-md-2"></div>
@stop




