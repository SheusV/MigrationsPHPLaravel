<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(Request $r){
        $users= User::all();
        return $users;
    }
    public function findOne(Request $r){
        $user= User::find($r->id);
        $user['addresses']= $user->addresses;
        return $user;
    }

    public function insert(Request $r){
        $newUser= $r-> only(['name','email','password']);
        $user = User::create($newUser);
        return $user;

    }
     public function findAdress(Request $r){
        $user= User::find($r->id);
        $user['address']=$user->address;
        return $user;
     }



}
