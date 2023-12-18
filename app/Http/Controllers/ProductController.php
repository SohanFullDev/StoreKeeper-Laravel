<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function ProductAll()
    {

        $product = DB::table('products')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard',compact('product'));
    }
}
