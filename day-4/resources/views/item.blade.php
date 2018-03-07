<h1>Current List</h1>
@if (count($Item)>0)
  @foreach($Item as $item)
    <div class="container">
      <div class="row">
        <div class="col-md-6">
      @if($item->done == 0)
        {{$item->item}}
        </div>
        <div class="col-md-6">
        <a href="{{URL::to('/doneItem/'.$item->id)}}">DONE</a>
      @else
        <strike>{{$item->item}}</strike>
        </div>
        <div class="col-md-6">
        <a href="{{URL::to('/doneItem/'.$item->id)}}">NOT DONE</a>
      @endif
          <a href="{{URL::to('/deleteItem/'.$item->id)}}">DELETE</a>
        </div>
      </div>
    </div>
  @endforeach
@endif
