<?php

namespace App\Http\Controllers\Public;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()

    {

        $col = ['products.*',  DB::raw('categories.category_name ,categories.slug as category_slug')];
        $products = Product::join('category_product', 'products.id', '=', 'category_product.product_id' )
                ->join('categories', 'category_product.category_id', '=', 'categories.id')
                ->orderBy('categories.category_name','asc')
                ->orderBy('products.status','desc')
                ->orderBy('products.discount', 'desc')
                ->get($col);
        return view('frontend.index',['products' => $products->groupBy('category_name')]);
    }

    public function Search(Request $request)
    {
       $searchWord = $request->searchInfo;
        $products = Product::where('name','like','%'. $searchWord.'%')
                    ->orderBy('status', 'desc')
                    ->orderBy('discount', 'desc')
                    ->get();
        return view('frontend.search',['products'=>$products, 'searchWord'=> $searchWord]);
    }
}
