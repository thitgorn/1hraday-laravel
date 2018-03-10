<!-- show all item -->
<div class="container">
  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-secondary">
      <h3>ITEM</h3>
      <h3>USER</h3>
    </li>
    @if(count($Items) > 0)
      @foreach($Items as $Item)
      <li class="list-group-item d-flex justify-content-between align-items-center">
        {{$Item->name}}
        <span>{{$Item->user}}</span>
      </li>
      @endforeach
    @endif
  </ul>
</div>
