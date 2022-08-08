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
    $col = ['products.*', DB::raw('categories.slug as category_slug'), DB::raw('brands.name as brandName')];

    $products = Product::join('category_product', 'products.id', '=', 'category_product.product_id' )
            ->join('categories', 'category_product.category_id', '=', 'categories.id')
            ->join('brand_product', 'products.id', '=', 'brand_product.product_id')
            ->join('brands', 'brands.id', '=', 'brand_product.brand_id')
            ->where('categories.slug', $slug)
                ->orderBy('brands.name','asc')
                ->orderBy('products.status','desc')
                ->orderBy('products.discount', 'desc')
            ->get($col);
    $viewable = Category::VIEWABLE;
    return view("frontend.categories.{$viewable[$slug]}",['products' => $products->groupBy('brandName')]);
   }

}
