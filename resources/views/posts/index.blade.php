@extends('main')

@section('title',' | All Posts')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>

        <div class="col-md-2">
            <a href="{{route('posts.create')}}" class="btn btn-md btn-primary btn-block btn-h1-spacing">Create New Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="post">
                @foreach($posts as $post)
                <h3>{{ $post->title}}</h3>
              <p class="lead">{{ substr($post->body, 0, 50)}}{{ strlen($post->body)>50 ? "...":""}}</p>
              <small style="text-align:left" class="text-muted">Created at: {{date('M j, Y h:ia',strtotime($post->created_at))}}</small><br>
              <a href ="{{route('posts.show', $post->id) }}" class="btn btn-primary">View</a>    
              <div class="col-md-12">
                      <hr>
              </div>       
                @endforeach
                </div>
@endsection