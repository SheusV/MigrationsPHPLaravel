<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //
    public function index(Request $r){
        $invoices= Invoice::all();
        return $invoices;
    }

    public function insert(Request $r){
        $newInvoice= $r-> only(['description','value','address_id','user_id']);
        $invoice = Invoice::create($newInvoice);
        return $invoice;

    }

    public function findOne(Request $r){
        $invoice= Invoice::find($r->id);
        $invoice['user']=$invoice->user;
        $invoice['address']=$invoice->address;
        return $invoice;
    }

}
