<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TransactionR;
use App\Models\TransactionM;



class TransactionC extends Controller
{
    public function index(){
        $transactions = TransactionM::all();
        //return response()->json($posts);
        return TransactionR::collection($transactions);
    }

    public function detail($id){
        $transactions = TransactionM::findOrFail($id);
        return new TransactionR($transactions);
    }
}
