@guest
<!-- guest navbar  -->
@include('../guest.navbar')
@else
  <!-- member navbar -->
  @include('../user.navbar')
@endguest
