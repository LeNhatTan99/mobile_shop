<?php

namespace App\Http\Controllers\Public;

use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class BrandController extends Controller
{

   public function getListProduct($slug)
   {
    $col = ['products.*', DB::raw('brands.name as brandName')];
    $productApple = Product::join('brand_product', 'products.id', '=', 'brand_product.product_id' )
    ->join('brands', 'brand_product.brand_id', '=', 'brands.id')
    ->where('brands.id', 1)->orderBy('products.status', 'asc')->orderBy('products.price','desc')->get($col);
    $productSamsung = Product::join('brand_product', 'products.id', '=', 'brand_product.product_id' )
    ->join('brands', 'brand_product.brand_id', '=', 'brands.id')
    ->where('brands.id', 2)->orderBy('products.status', 'asc')->orderBy('products.price','desc')->get($col);
    $productOppo = Product::join('brand_product', 'products.id', '=', 'brand_product.product_id' )
    ->join('brands', 'brand_product.brand_id', '=', 'brands.id')
    ->where('brands.id', 3)->orderBy('products.status', 'asc')->orderBy('products.price','desc')->get($col);
    $productVivo = Product::join('brand_product', 'products.id', '=', 'brand_product.product_id' )
    ->join('brands', 'brand_product.brand_id', '=', 'brands.id')
    ->where('brands.id', 4)->orderBy('products.status', 'asc')->orderBy('products.price','desc')->get($col);
    $productXiaomi = Product::join('brand_product', 'products.id', '=', 'brand_product.product_id' )
    ->join('brands', 'brand_product.brand_id', '=', 'brands.id')
    ->where('brands.id', 5)->orderBy('products.status', 'asc')->orderBy('products.price','desc')->get($col);

    $products = Product::get();
    $product = Brand::where('slug',$slug)->first();

    $viewData=[
        'product'=>$product,
        'products'=>$products,
        'productApple'=>$productApple,
        'productSamsung'=>$productSamsung,
        'productOppo'=>$productOppo,
        'productVivo'=>$productVivo,
        'productXiaomi'=>$productXiaomi,
    ];
    $apple = Brand::with('products')->find(1);
    $samsung = Brand::with('products')->find(2);
    $oppo = Brand::with('products')->find(3);
    $vivo = Brand::with('products')->find(4);
    $xiaomi = Brand::with('products')->find(5);

    if($slug == $apple->slug){
        return view('frontend.brands.apple',$viewData);
    } else if ($slug == $samsung->slug){
        return view('frontend.brands.samsung',$viewData);
    }  else if ($slug == $oppo->slug){
        return view('frontend.brands.oppo',$viewData);
     }
        else if ($slug == $vivo->slug){
    return view('frontend.brands.vivo',$viewData);
   } else  if ($slug == $xiaomi->slug) return view('frontend.brands.xiaomi',$viewData);

}
}
