@extends('layouts.app')

@section('content')

    @foreach($articles as $article)
        <div class="box">
            <div class="">
                <h2>{{ $article->data->first()->title}}
                    <br>
                    <small>{{ $article->subtitle}}</small>
                </h2>
            </div>
            <div class="">
                <img src="{!! $article->thumbnail()->first()->path !!}" alt="salut">
                <p>{!! $article->description !!}</p>
            </div>
            <div class="">
                <a href="{{ route('articles.show', ['id' => $article->id])}}">View</a>
            </div>
        </div>
    @endforeach


@stop




