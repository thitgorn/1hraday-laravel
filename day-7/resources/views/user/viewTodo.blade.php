<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-secondary">
    <h3>MY TODO</h3>
  </li>
  @if(count($Items)>0)
    @foreach($Items as $Item)
    <li class="list-group-item d-flex justify-content-between align-items-center">
      @if($Item->done)
        <strike>{{$Item->name}}</strike>
      @else
        {{$Item->name}}
      @endif
      <div>
        @if(Auth::user()->permission > 0)
          {{$Item->user}}
        @endif
        <span>@include('user.doneItem')</span>
        <span>@include('user.deleteItem')</span>
      </div>
    </li>
    @endforeach
  @else
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-danger">
      Click add to get started !!
    </li>
  @endif
</ul>
