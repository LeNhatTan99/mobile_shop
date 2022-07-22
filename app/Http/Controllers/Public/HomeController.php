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
         $categories = Category::orderBy('categories.id','asc')->get();

        $col = ['products.*', DB::raw('categories.slug as category_slug')];
        $products = Product::get();
        $productNew = Product::where('status','=', 1)->orderBy('products.price', 'desc')->limit(4)->get();
        $productMobile = Product::join('category_product', 'products.id', '=', 'category_product.product_id' )->select($col)
        ->join('categories', 'category_product.category_id', '=', 'categories.id')
        ->where('categories.id', 1)->orderBy('products.discount', 'desc')->limit(4) ->get($col);
        $productTablet =  Product::join('category_product', 'products.id', '=', 'category_product.product_id' )
        ->join('categories', 'category_product.category_id', '=', 'categories.id')
        ->where('categories.id', 2)->orderBy('products.discount', 'desc')->limit(4) ->get($col);
        $productAccessory =  Product::join('category_product', 'products.id', '=', 'category_product.product_id' )
        ->join('categories', 'category_product.category_id', '=', 'categories.id')
        ->where('categories.id', 3)->orderBy('products.discount', 'desc')->limit(4) ->get($col);

        $viewData = [
            'categories'=>$categories,
            'products'=>$products,
            'productNew'=>$productNew,
            'productMobile'=>$productMobile,
            'productTablet'=>$productTablet,
            'productAccessory'=>$productAccessory,
        ];
        return view('frontend.index',$viewData);
    }
}
