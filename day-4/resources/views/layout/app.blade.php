<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <title>TODO LIST</title>
  </head>
  <body>
    <div class="container text-center">
      @if (session('status'))
          <div class="alert alert-success hideMe">
              {{ session('status') }}
          </div>
      @endif
      <h1>"TODO LIST"</h1>
      @include('../item')
      @include('../additem')
    </div>
  </body>
</html>
