<?php

namespace App\Http\Controllers;

use App\Models\LogM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\LogR;


class LogC extends Controller
{
    function index(){
        $log = LogM::all();
        //return response()->json($posts);
        return LogR::collection($log);
    }

    public function detail($id){
        $log = LogM::findOrFail($id);
        return new LogR($log);
    }
}
