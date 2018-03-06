# Day3

- get Data from message data

```$message = Message::all();```

```return view('viewdata')->with('message', $message);```

- get Data from database

```use Illuminate\Support\Facades\DB;```

```$message = DB::select('select * from messages');```

if want to use this as JSON
just ``` return $message ``` right the way


change vue to react by

run

```php artisan preset react```

```npm install && npm run dev```

generate token and call react dom

```
<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
    </head>
    <body>
        <div id="example"></div>
        <script src="{{asset('js/app.js')}}" ></script>
    </body>
</html>
```
```npm run dev```

```php artisan serve```
