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

 $this->validate($request,[
        'name' => 'required|max:255',
        'username' => 'required|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|confirmed',

    ]);

User::create([
'name'=>$request->name,
'username'=>$request->username,
'email'=>$request->email,
'password'=>Hash::make($request->password)



]);

// auth()->check($request->only('username','password'));

// return redirect()->route('dashboard');

$credentials = $request->only('username', 'password');

if (Auth::attempt($credentials)) {
    $request->session()->regenerate();

    return redirect()->intended('dashboard');
}

return back()->withErrors([
    'email' => 'The provided credentials do not match our records.',
]);
}





}
