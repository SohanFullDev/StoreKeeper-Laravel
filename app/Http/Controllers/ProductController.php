<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductController extends Controller
{
    public function ProductAll()
    {

        $product = DB::table('products')
            ->orderBy('created_at', 'desc')
           // ->get();
           ->paginate(5);
        return view('dashboard',compact('product'));
    }

    public function ProductAdd(){
        return view('product_add');

    }

    public function ProductStore(Request $request){
        DB::table('products')->insert([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'created_at' => Carbon::now(),
        ]);


        return redirect()->route('product.all');


    }
}
