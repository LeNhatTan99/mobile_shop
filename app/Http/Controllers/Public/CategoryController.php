<?php

namespace App\Http\Controllers\Public;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{

   public function getListProduct($slug)
   {
    $col = ['products.*', DB::raw('categories.slug as category_slug')];
    $productNew = Product::where('status','=', 1)->orderBy('products.price', 'desc')->get();
    $productMobile = Product::join('category_product', 'products.id', '=', 'category_product.product_id' )
    ->join('categories', 'category_product.category_id', '=', 'categories.id')
    ->where('categories.id', 1)->orderBy('products.discount', 'desc')->get($col);
    $productTablet =  Product::join('category_product', 'products.id', '=', 'category_product.product_id' )
    ->join('categories', 'category_product.category_id', '=', 'categories.id')
    ->where('categories.id', 2)->orderBy('products.discount', 'desc')->get($col);
    $productAccessory =  Product::join('category_product', 'products.id', '=', 'category_product.product_id' )
    ->join('categories', 'category_product.category_id', '=', 'categories.id')
    ->where('categories.id', 3)->orderBy('products.discount', 'desc')->get($col);

    $category_slug = Category::where('slug',$slug)->first();

    $viewData=[
        'category_slug'=>$category_slug,
        'productNew'=>$productNew,
        'productMobile'=>$productMobile,
        'productTablet'=>$productTablet,
        'productAccessory'=>$productAccessory,
    ];
    $mobile = Category::with('products')->find(1);
    $tablet = Category::with('products')->find(2);
    $accessory = Category::with('products')->find(3);

    if($slug == $mobile->slug){
        return view('frontend.categories.mobile',$viewData);
    } else if ($slug == $tablet->slug){
        return view('frontend.categories.tablet',$viewData);
    } else return view('frontend.categories.accessory',$viewData);
   }

}
