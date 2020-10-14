<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
  <nav class="navbar navbar-default">
    @include('partials._nav')
  </nav>
  <body>
    <div class="container">
      @include('partials._messages')
      @yield('content')
      @include('partials._footer')
    </div>

    @include('partials._javascript')
    @yield('scripts')
  </body>
</html>
