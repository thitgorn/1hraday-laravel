<h1>All user TODO List</h1>
@if (count($Item)>0)
  @foreach($Item as $item)
    <div class="container">
      <div class="row">
        <div class="col-md-6">
      @if($item->done == 0)
        {{$item->item}}
        </div>
      @else
        <strike>{{$item->item}}</strike>
        </div>
      @endif
        <div class="col-md-6">
          {{$item->user}}
        </div>
      </div>
    </div>
  @endforeach
@endif
