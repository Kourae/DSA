<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller{

    public function index(){
        $products = Products::paginate(20);

        return view('product-table', compact('products'));
    }
    public function searchByPrice(Request $request){
        $query = trim($request->input("search-product"));

        if(empty($query)){
            return response()->json([]);

        }

        $result = Products::whereRaw("CONCAT(product_name, ' ', price) LIKE ?", ["%{$query}%"])
        ->orderBy('product_name')
        ->orderBy('price')
        ->limit(20)
        ->get();

        return response()->json($result);
    }
}