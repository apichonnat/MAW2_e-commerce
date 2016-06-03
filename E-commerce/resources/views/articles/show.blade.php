@extends('layouts.app')

@section('content')
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <div class="box_view">
        <div class="">
            <h4><a href="{{ route('articles.index')}}">Back</a></h4>
            <h2>{{ $article->title }}
                <br>
                <small>{{ $article->subtitle}}</small>
            </h2>
        </div>
        <div>
            @foreach($media as $img)
                <img src="../{!! $img->path !!}" alt="{!! $img->description !!}">
                {{--TODO: modifier l'acces à l'image en enlevant le ../--}}
            @endforeach
        </div>
        <div class="">
            <img src="" alt="salut">
            <p>{!! $article->description !!}</p>
        </div>
        <div class="">
            {{--mauvais--}}
        </div>
    </div>
    </div>
    <div class="col-md-1"></div>

@stop




