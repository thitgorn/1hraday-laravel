<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <script$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });>
        </script>
    <title>todo list react</title>
  </head>
  <body>
      @if(config('app.env') == 'local')
        <script src="http://localhost:35729/livereload.js"></script>
      @endif
      <div id="example"></div>
      <script src="{{asset('js/app.js')}}" ></script>
  </body>
</html>
