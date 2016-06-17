@extends('layouts.app')

@section('content')
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="box_table">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>{{ trans('message.title') }}</td>
                        <td>{{ trans('message.subtitle') }}</td>
                        <td>{{ trans('message.description') }}</td>
                        <td>{{ trans('message.language') }}</td>
                        <td>{{ trans('message.state') }}</td>
                        <td>{{ trans('message.modif') }}</td>
                        <td>{{ trans('message.del') }}</td>
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
                                <a href="{{ route('admin.pictures.edit', ['id' => $article->id])}}"><span class="glyphicon glyphicon-picture" aria-hidden="true"/></a>
                                <a href="{{ route('admin.articles.edit', ['id' => $article->id])}}"><span class="glyphicon glyphicon-text-background" aria-hidden="true"/></a>
                                <a href="{{ route('admin.contents.edit', ['id' => $value->id])}}"><span class="glyphicon glyphicon-edit" aria-hidden="true"/></a>
                            </td>
                            <td>
                                {!! Form::open(['route' => ['admin.contents.destroy', $value->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
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




