@extends('layouts.app')




@section('content')



<div class="flex justify-center mt-8 ">
    <div class=" bg-white p-6 rounded-lg sm:mb-8  md:w-5/12 ">

<form action="{{ route('register') }}" method="post">   
    {{-- this is cross site request forgery prtoection.  --}}
    @csrf
<div class="mb-4">
    <label for="name" class="sr-only">Name</label>
    <input type="text" name="name" id="name" placeholder="Your name"
    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror value='{{old('name')}}'">
    @error('name')
<div class="text-red-500 mt-2 text-2m">
    {{ $message }}
</div>
    @enderror
</div>
<div class="mb-4">
    <label for="username" class="sr-only">Username</label>
    <input type="text" name="username" id="username" placeholder="Username"
    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror value='{{ old('username') }}'">
    @error('username')
    <div class=text-red-500 mt-2 text-2m>
        {{ $message }}
    </div>
        @enderror
</div>
<div class="mb-4">
    <label for="email" class="sr-only">Email</label>
    <input type="text" name="email" id="email" placeholder="youremail@example.com"
    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror value='{{ old('email') }}'">
    @error('email')
    <div class=text-red-500 mt-2 text-2m>
        {{ $message }}
    </div>
        @enderror
</div>
<div class="mb-4">
    <label for="password" class="sr-only">Password</label>
    <input type="password" name="password" id="password" placeholder="Choose a password"
    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror value=''">
    @error('password')
    <div class=text-red-500 mt-2 text-2m>
        {{ $message }}
    </div>
        @enderror
</div>
<div class="mb-4">
    {{-- The field under validation must have a matching field of foo_confirmation --}}
    <label for="password_confirmation" class="sr-only">Password again</label>
    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"
    class="bg-gray-100 border-2 w-full p-4 rounded-lg value=''">
    
</div>
<div class="flex justify-between">
    <button type="submit" class="bg-blue-500 px-4 py-3 rounded-lg mb-6 text-white text-center font-medium w-full">
        Register
    </button>
</div>
</form>



    </div>
    </div>









    @endsection