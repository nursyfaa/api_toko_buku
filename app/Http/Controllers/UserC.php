<?php

namespace App\Http\Controllers;

use App\Models\UserM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Users;
use App\Http\Resources\UserR;

class UserC extends Controller
{
    public function index(){
        $users = UserM::all();
        // return response()-> json($users);
        return UserR::collection($users);
    }

    public function detail($id){
        $users = UserM::findOrFail($id);
        return new UserR($users);
    }
}
