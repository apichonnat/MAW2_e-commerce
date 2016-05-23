@extends('layouts.app')

@section('content')
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="box_table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Titre</td>
                        <td>Sous-Titre</td>
                        <td>Déscription</td>
                        <td>langues</td>
                        <td>Statue</td>
                        <td>Modification</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{!! $article->title !!}</td>
                            <td>{!! $article->subtitle !!}</td>
                            <td>{!! $article->description !!}</td>
                            <td>{!! $article->language !!}</td>
                            <td>{!! $article->state !!}</td>
                            <td>
                                <a href="{{ route('admin.addPictures.edit', ['id' => $article->id])}}">Add Picture</a>
                                <a href="{{ route('admin.addContents.edit', ['id' => $article->id])}}">Add Content</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-1"></div>

@stop




