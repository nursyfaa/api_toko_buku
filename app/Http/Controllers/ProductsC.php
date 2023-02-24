<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Resources\ProductsR;
use App\Http\Controllers\Controller;
use App\Models\ProductsM;

class ProductsC extends Controller
{
    public function index(){
        $product = ProductsM::all();
        //return response()->json($posts);
        return ProductsR::collection($product);
    }

    public function detail($id){
        $product = ProductsM::findOrFail($id);
        return new ProductsR($product);
    }
}
