@extends('layouts.app')

@section('content')
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="box_table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Id</td>
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
                        @foreach($article->data as $value)

                        <tr>
                            <td>{!! $article->id !!}</td>
                            <td>{!! $value->title !!}</td>
                            <td>{!! $value->subtitle !!}</td>
                            <td>{!! $value->description !!}</td>
                            <td>{!! $value->language->name !!}</td>
                            <td>{!! $article->state !!}</td>
                            <td>
                                <a href="{{ route('admin.pictures.edit', ['id' => $article->id])}}">Add Picture</a>
                                <a href="{{ route('admin.contents.edit', ['id' => $article->id])}}">Add Content</a>
                                <a href="{{ route('admin.contents.destroy', ['id' => $article->id])}}">Del Content</a>
                            </td>
                        </tr>
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-1"></div>

@stop




