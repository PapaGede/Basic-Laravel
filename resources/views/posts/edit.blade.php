@extends('main')
<link rel="icon" type="ico/png" href="../images/icons8_DOT_48px.png">
@section('title',' | Edit Posts')

@section('content')
    
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            {{ Form::model($post,['route'=>['posts.update', $post->id],'method'=>'PUT'])}}
                <div style="text-align:center" class="post">
                    {{Form::label('title','Title:')}}
                    {{Form::text('title',null,array('class'=>'form-control'))}}
        
                    {{Form::label('body','Body:')}}
                    {{Form::textarea('body',null,array('class'=>'form-control'))}}
                        <small style="text-align:left" class="text-muted">Created at:{{date('M j, Y h:ia',strtotime($post->created_at))}}</small>
                        <div class="row">
                            <div class="col-sm-6"> 
                                {{Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block'))}}
                            </div>
                            <div class="col-sm-6">
                                {{Form::submit('Save',array('class'=>'btn btn-success btn-block'))}}
                            </div>   
                        </div>
                                 
                 </div>
            {{Form::close()}}
            </div><hr>

        </div>
</div>

@endsection