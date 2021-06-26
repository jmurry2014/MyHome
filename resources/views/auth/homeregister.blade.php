@extends('layouts.app')

@section('content')
<style>
label{
    font-weight:bold;
}
</style>

<div class='text-center'>
<p class="mt-10 pb-3 text-2xl">Add Your Property</p>
<p class="text-lg ">Reach millions of renters. Screen applicants.<br>
    Sign leases. Set up rent payments.
</p>
</div>










<div class="flex justify-center mt-8 ">
    <div class=" bg-white p-6 rounded-lg sm:mb-8  md:w-5/12 ">

<form action="{{ route('createHome') }}" method="POST">   
    {{-- this is cross site request forgery prtoection.  --}}
    @csrf

    <label for="adress">Street Adress</label>
<div class="mb-4">



    <input type="text" name="address" id="address" placeholder="Street Adress..."
    class="bg-gray-100 border-2 w-full p-4 rounded-lg ">

</div>

<label for="unit">Unit Number (If applicable)</label>
<div class="mb-4">
    <input type="text" name="unit" id="unit" placeholder="Unit Number"
    class="bg-gray-100 border-2 w-full p-4 rounded-lg ">
 
</div>
<div class="grid grid-cols-3 gap-4">
   <select name="property" id="property" class="mt-2 mb-4 bg-gray-100 border-2 w-full p-4 rounded-lg" >
    <option value="house">House</option>
    <option value="condo">Condo/Apartment unit</option>
    <option value="townhouse">Townhouse</option>
   </select>

   <input type="text" name="cost" id="cost" placeholder="Cost Per month"
   class="bg-gray-100 border-2 mt-2 m-4 p-4 rounded-lg ">
   <div>
<label for="rooms"> number of rooms</label>
   <select name="rooms" id="rooms" class="mt-2 mb-4 bg-gray-100 border-2 w-full p-4 rounded-lg" >
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
   </select>
</div>

</div>


<div class=" bg-yellow-400   text-center p-6 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded-lg transition duration-300 ">
    <a href="" class="font-bold">
     <input type="submit" value='Submit' class="bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded-lg transition duration-300 text-lg" >
    </a> 
     </div>
</form>



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

// Address components (I was trying to get the components of said address to seperate form fields so i could have stae city zip etc by themselves instead of one string seperated by commas)
var location="22 main st Boston MA"
axios.get('http://maps.googleapis.com/maps/api/geocode/json',{
 params:{
     address:location,
     key:'{{env('API_KEY')}}'


 }  
    

}).then(function(response){

console.log(response)





}).catch(function(error){
    console.log(error)
})





















          var input = document.getElementById('address');
          var autocomplete = new google.maps.places.Autocomplete(input, options);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      </script>

    @endsection




























