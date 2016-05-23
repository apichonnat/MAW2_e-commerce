@extends('layouts.app')

@section('content')
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <p><h2>Création nouvel article</h2></p>
        {!! Form::open(['route' => 'admin.articles.store', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {!! Form::label('title', 'Titre') !!}
                {!! Form::text('title', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('subtitle', 'Sous-Titre') !!}
                {!! Form::text('subtitle', '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description', '', ['class' => 'form-control']) !!}
            </div>

            <div class="form-groupe">
                {!! Form::Label('category', 'Catégorie') !!}
                {!! Form::select('category', $data, ['class' => 'form-control']) !!}
            </div>

            <div class="form-groupe">
                {!! Form::Label('language', 'Language') !!}
                {!! Form::select('language', $language, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::Label('data', 'Image') !!}
                {!! Form::file('image') !!}
            </div>

            <div class="form-groupe">
                {!! Form::Label('typeImage', 'Type de limage') !!}
                {!! Form::select('typeImage', $type_media, ['class' => 'form-control']) !!}

            </div>

            <div class="form-group">
                {!! Form::Label('desc', 'Description image') !!}
                {!! Form::text('desc', '', ['class' => 'form-control']) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Submit', ['class' => 'btn btn-default']) !!}
            </div>
            {!! Form::close() !!}
    </div>
    <div class="col-md-2"></div>




@stop




