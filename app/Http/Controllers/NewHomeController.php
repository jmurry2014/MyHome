<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use App\Models\User;


class NewHomeController extends Controller
{
    //


public function index(){
    return view('auth.homeregister');
    // $user=User::findOrFail(1);
    // $apartment=new Apartment(['name'=>'Legends','address'=>'1234 fake lane','city'=>'Lawrence','state'=>'KS','zip'=>'66044','price'=>'400','rooms'=>2,'availability'=>1,'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat natus magni est eos sit error velit excepturi porro sed magnam?','phone_number'=>'785-222-2222',]);
    // $user->apartments()->save($apartment);
    // dd($user);







}







}
