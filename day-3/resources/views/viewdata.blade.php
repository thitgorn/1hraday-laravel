@if(count($message) > 0)
    @foreach($message as $msg)
      <ul class="list-group">
        <li class="list-group-item">name : {{$msg->name}}</li>
        <li class="list-group-item">email : {{$msg->email}}</li>
        <li class="list-group-item">message : {{$msg->message}}</li>
      </ul>
    @endforeach
@endif
