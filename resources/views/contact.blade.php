
@extends('main')
@section('stylesheet')
  <link rel="stylesheet" href="css/parsley.css">
@endsection
@section('title','| Contact')
@section('content')
    <div class="row">
      <div class="col-md-12">
        <h1>Contact Me</h1>
  
  <form id="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required><br>
    <div>
  <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection

@section('scripts')
  <script src="js/parsley.min.js"></script>
  <script>
    $('#form').parsley();
  </script>
@endsection