@extends('layouts.app')




@section('content')

<div class="flex justify-center mt-8">
    <div class=" bg-white p-6 rounded-lg sm:w-4/12 md:w-6/12 ">
@if(session('status'))
<div class="bg-red-500 px-4 py-3 rounded-lg mb-6 text-white text-center font-medium w-full">
{{ session('status') }}
</div>
@endif
<form action="{{ route('login') }}" method="post">   
    {{-- this is cross site request forgery prtoection.  --}}
     @csrf
<div class="mb-4">
    <label for="email" class="sr-only">Email</label>
    <input type="email" name="email" id="email" placeholder="example@domain.com"
    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror value='{{ old('email') }}'">
    @error('email')
    <div class=text-red-500 mt-2 text-2m>
        {{ $message }}
    </div>
        @enderror
</div>
<div class="mb-4">
    <label for="password" class="sr-only">Password</label>
    <input type="password" name="password" id="password" placeholder="Create a Password"
    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror value=''">
    @error('password')
    <div class=text-red-500 mt-2 text-2m>
    </div>
        @enderror
</div>
<div class=" flex justify-between">

    <button type="submit" class="bg-blue-500 px-4 py-3 rounded-lg mb-6 text-white text-center font-medium w-full">
        login
    </button>

   
</div>
</form>
 </div>
 </div> 











    @endsection