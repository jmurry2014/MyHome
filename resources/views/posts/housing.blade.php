@extends('layouts.app')
{{-- this is a directive i added in from github very useful --}}
@javascript(['latlng'=>$latlng])







@section('content')
<div class="grid">
  <div id="map" class="col-start-1 col-end-7  h-screen "></div>
<section class="grid col-start-7 col-end-8">
@foreach ( $apartment as $apartments)
<div id="houseCard" class="grid justify-items-center  bg-gray-500  max-h-36" >
  <h1 class="font-bold text-2xl text-center ">The Nest</h1>
  <p class="text-md">{{ $apartments->address }}, {{ $apartments->city }}, {{ $apartments->state }} {{ $apartments->zip }}</p>

<img src="" alt="logo">
</div>
@endforeach

{{-- this adds in the pagination through bootstrap bringing in all info from my apartments --}}
{{   $apartment->links() }};

</section>

</div>

  @endsection
