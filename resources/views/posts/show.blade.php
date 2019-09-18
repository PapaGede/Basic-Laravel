@extends('main')
@section('title','| View Post')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <div style="text-align:center" class="post">
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
                <small style="text-align:left" class="text-muted">Created at:{{date('M j, Y h:ia',strtotime($post->created_at))}}</small>
                <div class="row">
                        <div class="col-sm-6">
                            {{Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block'))}}
                        </div>
                        <div class="col-sm-6">
                             {{Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])}}
                             {{Form::submit('Delete',array('class'=>'btn btn-danger btn-block'))}}
                             {{Form::close()}}
                            </div>   
                        <div class="col-md-12">
                                {{Html::linkRoute('posts.index','<< Back',array(),array('class'=>'btn btn-primary btn-block btn-h1-spacing'))}}
                        </div>    
                </div>
                     
                </div>
        </div><hr>

    </div>
</div>
@endsection