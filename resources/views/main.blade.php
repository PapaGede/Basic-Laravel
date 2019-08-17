<!doctype html>
<html lang="en">
  @include('Partials._head')
  <body>
  @include('Partials._nav')
<div class="container">
  @yield('content')
  @include('Partials._footer')  
</div>
    @include('Partials._javascript')
  </body>
</html>