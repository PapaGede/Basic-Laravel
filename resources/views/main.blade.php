<!doctype html>
<html lang="en">
<head>  
  @include('Partials._head')
  
</head>
  <body>
  @include('Partials._nav')
  <div class="container">
  @include('Partials._messages')
  @yield('content')
  @include('Partials._footer')  
</div>
    @include('Partials._javascript')
    @yield('scripts')
</body>
</html>