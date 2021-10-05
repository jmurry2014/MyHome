@extends('layouts.app')
{{-- this is a directive i added in from github very useful --}}
@javascript(['latlng'=>$latlng])







@section('content')
<div class="grid">
  <div id="map" class="col-start-1 col-end-7  h-screen "></div>
<section class="grid col-start-7 col-end-8">

<div id="houseCard" class="grid justify-items-center  bg-gray-500  max-h-36" >
  <div class="">
    <h1 class="font-bold text-2xl text-center ">The Nest</h1>
    <p class="text-md">3345 Magnolia Cir, Lawrence, KS 66046</p>
  </div>

<img src="" alt="logo">
</div>
<div id="houseCard" class="grid justify-items-center  bg-gray-500  max-h-36" >
  <div class="">
    <h1 class="font-bold text-2xl text-center ">The Nest</h1>
    <p class="text-md">3345 Magnolia Cir, Lawrence, KS 66046</p>
  </div>

<img src="" alt="logo">
</div>

  








</section>







</div>






















  @endsection