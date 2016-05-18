@extends('layouts.app')

@section('content')

    @foreach($articles as $article)
        <div class="box">
            <div class="">
                <h2>{{ $article->title }}
                    <br>
                    <small>{{ $article->subtitle}}</small>
                </h2>
            </div>
            <div class="">
                <img src="{!! $article->thumbnail()->first()->path !!}" alt="salut">
                <p>{!! $article->description !!}</p>
            </div>
            <div class="">
                {!! link_to('articles/'.$article->id) !!}
                {{--mauvais--}}
            </div>
        </div>
    @endforeach

@stop




