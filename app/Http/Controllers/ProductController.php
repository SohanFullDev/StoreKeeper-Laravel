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

    public function ProductEdit($id){
             $product = DB::table('products')->where('id', $id)->first();
            return view('product_edit', compact('product'));
    }

    public function ProductUpdate(Request $request){
        $product_id = $request->id;
        DB::table('products')
        ->where('id', $product_id)
        ->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'updated_at' => Carbon::now(),
       ]);
     return redirect()->route('product.all');

    }

    public function ProductDelete($id){
        $product = DB::table('products')->where('id', $id)->first();
        if ($product) {
            DB::table('products')->where('id', $id)->delete();
        }
        return redirect()->back();
    }

    public function ProductSell($id){
        $product = DB::table('products')->where('id', $id)->first();
       return view('product_sell', compact('product'));
}

public function UpdateQuantity(Request $request){
    $product_id = $request->id;
    DB::table('products')
    ->where('id', $product_id)
    ->update([
       'quantity' => $request->quantity,
       'updated_at' => Carbon::now(),
   ]);
 return redirect()->route('product.all');

}

  public function SaleFigure(){

            $todaySales = DB::table('products')
            ->whereDate('created_at', Carbon::today())
            ->sum(DB::raw('quantity * price'));

            $yesterdaySales = DB::table('products')
            ->whereDate('created_at', Carbon::yesterday())
            ->sum(DB::raw('quantity * price'));

            $thisMonthSales = DB::table('products')
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum(DB::raw('quantity * price'));

            $lastMonthSales = DB::table('products')
            ->whereYear('created_at', Carbon::now()->subMonth()->year)
            ->whereMonth('created_at', Carbon::now()->subMonth()->month)
            ->sum(DB::raw('quantity * price'));

      return view('product_salefig', compact('todaySales','yesterdaySales','thisMonthSales','lastMonthSales'));
    }

    public function SaleTransaction(){

        $saleshistories= DB::table('products')
            ->orderBy('created_at', 'desc')
           // ->get();
           ->paginate(5);
        return view('sale_transaction', compact('saleshistories'));

    }


}
