<!-- include in manage -->
{!! Form::open(['url' => 'additem']) !!}
  {{Form::label('Item', 'Item')}}
  {{Form::text('Item')}}
  {{Form::submit('Add')}}
{!! Form::close() !!}
