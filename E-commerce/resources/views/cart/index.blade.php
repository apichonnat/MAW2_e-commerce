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

                </tr>
                </thead>
                <tbody>
                @foreach($orders as $value)
                    <a href="{!! route('articles.show', $value->id) !!}"></a>
                    <tr>
                        <td>{!! $value->title !!}</td>
                        <td>{!! $value->subtitle !!}</td>
                    </tr>
                @endforeach
                </tbody>
                {!! Form::open(['route' => ['orders.destroy', 'idArticle'], 'method' => 'delete']) !!}
                {!! Form::submit('Supprimer le panier', ['class'=>'btn btn-danger btn-xs']) !!}
                {!! Form::close() !!}
            </table>
        </div>
    </div>
    <div class="col-md-1"></div>
@stop




