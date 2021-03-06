<!DOCTYPE html>
<html lang="en" >
    <head>
       <meta charset="UTF-8" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       <link rel="stylesheet" href="{{ mix('css/app.css') }}">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="https://maps.googleapis.com/maps/api/js?key={{env('API_KEY')}}&libraries=places"></script>
    <body>
      
{{-- Navbar goes here --}}
<nav class="bg-gray-100">
    <div class="px-8 max-w-full mx-auto border ">
        <div class="flex justify-between">
            {{-- primary nav --}}
            <div class="hidden md:flex items-center space-x-1"> 
                @auth
                <a href="{{ route('newHome') }}"class="px-3 py-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transiton duration-300">Register a Home</a>
                @endauth
                <a href="{{ route('viewHomes') }}"class="px-3 py-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transiton duration-300">View Homes</a>
             </div>
{{-- logo --}}
    <a href="{{ route('home') }}"class="flex items-center py-4 px-2 text-gray-700 hover:text-gray-900 ">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
          <span class="font-bold">MyHome</span>
    </a>
  

{{-- secondary nav --}}
<div class="hidden md:flex items-center space-x-1">


    @guest
    <a href="{{ route('login') }}" class="px-3 py-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transiton duration-300">Login</a>
    <a href="{{ route('register') }}" class="px-3 py-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transiton duration-300">Register</a>
    @endguest

    
@auth

    <form action="{{ route('logout') }}" method="post" class="p-3 inline">
        @csrf
        <a href=""class="p-3 font-bold">{{ auth()->user()->name}}</a>
        <button type=submit class="px-3 py-3 bg-yellow-400 hover:bg-yellow-300 text-yellow-900 hover:text-yellow-800 rounded transiton duration-300">logout</button>
    </form>
    @endauth


</div>
{{-- mobile buttons go here --}}
<div class="md:hidden flex items-center">
    <button class="mobile-menu-button ">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
</div>
</div>

    </div>

{{-- mobile menu --}}
<div class=" mobile-menu hidden md:hidden">
<a href="#"class="block py-2 px-4 text-small hover: bg-gray-300 ">Features</a>
<a href="#"class="block py-2 px-4 text-small hover: bg-gray-300 ">Pricing</a>
</div>

</nav>




{{-- Content goes here --}}

@if ($errors->any())
    @foreach ($errors->all as $error)
        <div class="alert alert-danger" role="alert">
        <li> {{ $error }}</li>   
        </div>


    @endforeach
@endif






@yield('content')
<script src="{{asset('js/app.js')}}"></script>
    </body>
</html>