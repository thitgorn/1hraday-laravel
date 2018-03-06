# Day3

- get Data from message data

```$message = Message::all();```

```return view('viewdata')->with('message', $message);```

- get Data from database

```use Illuminate\Support\Facades\DB;```

```$message = DB::select('select * from messages');```

if want to use this as JSON
just ``` return $message ``` right the way
