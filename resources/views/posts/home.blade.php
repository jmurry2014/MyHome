@extends('layouts.app')







@section('content')
<body  style="background-image: url('img/skyline.jpg')" class="bg-center md:bg-top ">
  



<div class="py-24 text-center md:py-44  lg:mt-10"  >
  <h2 class="font-extrabold text-4xl mb-2 text-white md:text-6xl ">Discover Your New Home</h2>
  <p class="text-3xl text-white">Helping 100 million renters find their perfect fit.</p>
</div>

<div class="flex justify-center ">
  <div class="w-8/12 bg-white p-3 rounded-lg flex items-center ">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
    </svg>
    <input type="text"  name="address"placeholder="Search.." id="address" class="w-full bg-white p-6 rounded-lg text-2xl">
  </div>
  
  <div class="ml-5 bg-yellow-400  flex items-center p-6 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded-lg transition duration-300 ">
<a href="" class="font-bold">Search</a> 
 </div>



  </div>
<script>
  function initialize() {
    var options = {
  componentRestrictions: { country: "us" },
fields: ["formatted_address", "geometry", "name"],
strictBounds: false,
types: ["address"],

    };
    var input = document.getElementById('address');
    var autocomplete = new google.maps.places.Autocomplete(input, options);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</body>





  @endsection