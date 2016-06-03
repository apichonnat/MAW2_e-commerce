@extends('layouts.app')

@section('content')
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="box_table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Pseudo</td>
                    <td>Mail</td>
                    <td>Language</td>
                    <td>Validation</td>
                    <td>Modifcation</td>
                    <td>Suppression</td>


                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{!! $user->id !!}</td>
                        <td>{!! $user->first_name !!}</td>
                        <td>{!! $user->last_name !!}</td>
                        <td>{!! $user->pseudo !!}</td>
                        <td>{!! $user->mail !!}</td>
                        <td>{!! $user->language !!}</td>
                        <td>{!! $user->validate !!}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', ['id' => $user->id])}}"><span class="glyphicon glyphicon-text-background" aria-hidden="true"/></a>
                        </td>
                        <td>
                            {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-1"></div>
@stop




