@extends('main')

@section('title',' | Login')

@section('content')
    <br>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            {{Form::open()}}
                {{Form::label('email','Email:')}}
                {{Form::email('email',null,['class'=>'form-control'])}}

                {{Form::label('password','Password:')}}
                {{Form::password('password',['class'=>'form-control'])}}

                <br>
                {{Form::Checkbox('remember')}}{{Form::label('remember','Remember Me')}}
                <br>
                {{Form::submit('Login',['class'=>'btn btn-primary btn-block'])}}
            {{Form::close()}}
        </div>
    </div>

@endsection