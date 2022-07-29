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

    $col = ['products.*', 'categories.category_name', DB::raw('brands.name as brandName,brands.slug as brand_slug')];
    $products = Product::join('category_product', 'products.id', '=', 'category_product.product_id' )
            ->join('categories', 'category_product.category_id', '=', 'categories.id')
            ->join('brand_product', 'products.id', '=', 'brand_product.product_id')
            ->join('brands', 'brands.id', '=', 'brand_product.brand_id')
            ->where('brands.slug', $slug)
            ->orderBy('products.discount', 'desc')
            ->orderBy('products.price','desc')
            ->get($col);
            $viewable = Brand::VIEWABLE;
         
  return view("frontend.brands.{$viewable[$slug]}",['products' => $products->groupBy('category_name')]);
}
}
