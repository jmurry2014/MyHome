<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class NewHomeController extends Controller
{
    //


public function index(){
return view('auth.homeRegister');
}


public function storeData(Request $request){
    $id=Auth::user()->id;
    $user=User::findOrFail($id);

// this is ensuring that the form is meeting these requirements in the array
// $this->validate($request,[
//     'name' => 'required|max:255',
//     'address' => 'required|max:255',
//     'city' => 'required|max:255',
//     'state' => 'required|confirmed',
//     'zip' => 'required|max:5',
//     'price' => 'required|max:255',
//     'rooms' => 'required|max:255',
//     'availability' => 'required|boolean',
//     'description' => 'required|max:400',
//     'phone_number' => 'required|max:10',


// ]);





$newHome = new Apartment;
        
$newHome->address=$request->address;
$newHome->user_id=$id;

$newHome->price=$request->cost; 
$newHome->rooms=$request->rooms;

echo $newHome->save(); 












}












}
