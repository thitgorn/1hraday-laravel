@extends('../layouts.app')

@section('content')
  <div class="text-center container">
  @include('user.viewTodo')
  @include('user.addTodo')
  </div>
@endsection
