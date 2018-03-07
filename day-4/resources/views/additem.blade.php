{!! Form::open(['url' => '/additem']) !!}
  {{Form::label('itemlist', 'add item')}}
  {{Form::text('item')}}
  {{Form::submit('Add')}}
{!! Form::close() !!}
