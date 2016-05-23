@extends('layouts.app')

@section('content')

    <div class="box_view">
        <div class="">
            <h2>{{ $article->title }}
                <br>
                <small>{{ $article->subtitle}}</small>
            </h2>
        </div>


        <div class="">
            <img src="" alt="salut">
            <p>{!! $article->description !!}</p>
        </div>


        <div class="">

            {{--mauvais--}}
        </div>
    </div>


@stop




