@extends('layouts.app')
{{-- this is a directive i added in from github very useful --}}
@javascript(['latlng'=>$latlng])







@section('content')
<div class="container">
  <div id="map" class=""></div>
<div class="grid-container">
  @foreach ( $apartment as $apartments)
  <div class="houseCard" >
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQi6Fk4KETcZwwDktC1-JeG1nydGOBEY11rmQ&usqp=CAU" alt="logo">
    <div class="info"> 
      <h1 class="">${{ $apartments->price }} <span>{{ $apartments->rooms }} bd</span></h1> 
      <p class="">The Nest | {{ $apartments->address }}, {{ $apartments->city }}, {{ $apartments->state }} {{ $apartments->zip }}</p>
    </div>
  
  
  
  <br>
  </div>
  @endforeach

</div>


{{-- this adds in the pagination through bootstrap bringing in all info from my apartments --}}


{{   $apartment->links() }}

</div>


  @endsection
