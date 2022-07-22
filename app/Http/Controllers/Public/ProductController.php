<?php

namespace App\Http\Controllers\Public;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function productDetail($slug,Request $request)
   {
    $product = Product::where('slug',$slug)->first();
        $viewData = [
        'product'=> $product,
    ];
    return view('frontend.detail',$viewData);
    }
   }



