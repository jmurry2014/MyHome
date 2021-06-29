<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
    // used to keep track of which user is storing the data
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
$key=env('API_KEY');
$address=$request->address;
$response=http::get("https://maps.googleapis.com/maps/api/geocode/json?address=$address&key=$key
");

$result=$response->json(['results']);
// Latitude Longitude results
$geometryData=$result[0]['geometry'];
$location=$geometryData['location'];
$lat=$location['lat'];
$lng=$location['lng'];

// Address Components CITY STATE ZIP
$components=$result[0]['address_components'];
//   dd($components);
for($i=0;$i<count($components);$i++){
if($components[$i]['types'][0]=='locality'){
    $locality=$components[$i]['long_name'];
}else if($components[$i]['types'][0]=='postal_code'){
    $postalCode=$components[$i]['long_name'];

}else if($components[$i]['types'][0]=='administrative_area_level_1'){
    $state=$components[$i]['long_name'];
}




};















$newHome = new Apartment;
$newHome->address=$request->address;
$newHome->user_id=$id;
$newHome->city=$locality;
$newHome->state=$state;
$newHome->zip=$postalCode;
$newHome->latitude=$lat;
$newHome->longitude=$lng;

$newHome->price=$request->cost; 
$newHome->rooms=$request->rooms;
$newHome->save(); 






}



function apiData(){
$key=env('API_KEY');



    // return http::get("https://maps.googleapis.com/maps/api/geocode/json?address=100+Amphith6eatre+Parkway,
    // +Mountain+View,+CA&key=$key
    // ");
}








}
