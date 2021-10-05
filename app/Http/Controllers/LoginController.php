<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
      //this function prevents you from accessing the index or store method if already signed in 


    public function __construct()
    {
        $this->middleware(['guest']);
    }

public function index(){
  
return view('auth.login');
}



public function signIn(Request $request){
    $this->validate($request,[
        'email' => 'required',
        'password' => 'required',

    ]);
    $credentials = $request->only('email', 'password');

if (Auth::attempt($credentials)) {
    $request->session()->regenerate();

    return redirect()->intended(route('newHome'));
}
// will use this in my login blade file
return back()->with('status', 'Invalid login credentials');

}






}
