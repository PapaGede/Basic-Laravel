@extends('main')

@section('title','| Homepage')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome To My Blog</h1>
        <p class="lead">Thank you for visiting my page. It was made in Laravel</p>
        <p><a class="btn btn-primary btn-lg" href="/posts" role="button">Latest Posts</a></p>
      </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-8">
        <div class="post">
            @foreach($posts as $post)
              <h3>{{ $post->title}}</h3>
            <p class="lead">{{ substr($post->body, 0, 50)}}{{ strlen($post->body)>50 ? "...":""}}</p>
            <small style="text-align:left" class="text-muted">Created at: {{date('M j, Y h:ia',strtotime($post->created_at))}}</small><br>
            <a href ="{{route('posts.show', $post->id) }}" class="btn btn-primary">View</a>    
                    <hr>
                    @endforeach
            </div>       
              </div>

        
    <div class="col-md-3 offset-md-1">
      <h2>Sidebar</h2>
      .<div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
          <h1 class="display-3">Lorem</h1>
          <p class="lead">Jumbo helper text</p>
          <hr class="my-2">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est numquam provident, voluptatem asperiores quidem consequatur, consectetur, tenetur quis et molestias corporis blanditiis adipisci quia obcaecati architecto possimus suscipit! Hic, aliquam!</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Jumbo action name</a>
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    