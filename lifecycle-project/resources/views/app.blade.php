<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script$.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });>
        </script>
  </head>
  <body>
    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
