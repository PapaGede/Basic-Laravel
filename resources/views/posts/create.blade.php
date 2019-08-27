@extends('main')
<link rel="icon" type="ico/png" href="../images/icons8_DOT_48px.png">
@section('title', '|create')

@section('stylesheet')
    {{ Html::style('css/parsley.css')}}
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Create A Post</h1>
            <hr>
            {{ Form::open(['route' => 'posts.store','data-parsley-validate'=>'']) }}
                {{Form::label('title','Title:')}}
                {{Form::text('title',null,array('class'=>'form-control','required'=>''))}}

                {{Form::label('body','Body:')}}
                {{Form::textarea('body',null,array('class'=>'form-control','required'=>''))}}

                {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
            {{ Form::close() }}
        </div>
    </div>

@endsection

@section('scripts')
    {{Html::script('js/parsley.min.js')}}
@endsection