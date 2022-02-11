<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    //this function prevents you from accessing the index or store method if already signed in 

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index ()
    {
        return view('auth.register');
    }



protected function storeUser( Request $request)
{
// this is ensuring that the form is meeting these requirements in the array
 $this->validate($request,[
        'name' => 'required|max:255|min:5|alpha',
        'username' => 'required|max:255|min:5',
        'email' => 'required|email|max:255',
        'password' => 'required|confirmed',

    ]);
    // after validation this will create a new user with a protected password

User::create([
'name'=>$request->name,
'username'=>$request->username,
'email'=>$request->email,
'password'=>Hash::make($request->password)



]);

// auth()->check($request->only('username','password'));

// return redirect()->route('dashboard');
// this will log in the user with email and password credentials they created from the form 

$credentials = $request->only('email', 'password');

if (Auth::attempt($credentials)) {
    $request->session()->regenerate();

    return redirect()->intended('/');
}


return back()->withErrors([
    'email' => 'The provided credentials do not match our records.',
]);
}





}
