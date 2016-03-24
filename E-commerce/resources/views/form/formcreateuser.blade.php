@extends('default')

@section('content')

    {{--{!! Form::open(['route' => 'users.store']) !!}--}}
        {{--<form>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('firstname', 'First Name') !!}--}}
                {{--{!! Form::text('firstname', '', ['class' => 'form-control']) !!}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('lastname', 'Last Name') !!}--}}
                {{--{!! Form::text('lastname', '', ['class' => 'form-control']) !!}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('mail', 'Mail') !!}--}}
                {{--{!! Form::text('mail', '',['class' => 'form-control']) !!}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::label('Pseudo', 'Pseudo') !!}--}}
                {{--{!! Form::text('mail', '', ['class' => 'form-control']) !!}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--{!! Form::submit('submit', ['class' => 'btn btn-default']) !!}--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--{!! Form::close() !!}--}}
    <div class="conten-form">
        <form>
            <div class="form-group">
                <label for="">Nom</label>
                </label><input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Prenom</label>
                </label><input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Pseudo</label>
                </label><input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Mail</label>
                </label><input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Adresse</label>
                </label><input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Ville</label>
                </label><input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">NPA</label>
                </label><input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Pays</label>
                </label><input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                </label><input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">repeat password</label>
                </label><input type="text" class="form-control">
            </div>
        </form>
    </div>



@stop




