<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    //
    public function index(Request $r) {
        $addresses= Address::all();
        return $addresses;
    }

    public function findOne(Request $r){
        $addres= Address::find($r->id);
        $addres['user'] = $addres->user;
        return $addres;
    }

    public function insert(Request $r){
        $newAddress= $r-> only(['address']);
        $address = Address::create($newAddress);
        return $address;

    }

}
