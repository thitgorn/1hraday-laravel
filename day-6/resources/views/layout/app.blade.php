<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <title>TODO LIST</title>
  </head>
  <body>
    @include('../components/navbar')
    <div class="container text-center">
      @if (session('status'))
          <div class="alert alert-success hideMe">
              {{ session('status') }}
          </div>
      @endif
      @yield('content')
    </div>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
