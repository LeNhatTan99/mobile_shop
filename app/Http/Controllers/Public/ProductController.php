<?php

namespace App\Http\Controllers\Public;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Brand;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function productDetail($slug,Request $request)
   {
    $url= $request->segment(2);

    if($slug = $url){
        $productDetail = Product::find();
        dd($productDetail);
        $viewData = [
        'productDetail'=> $productDetail,
    ];
    return view('frontend.detail',$viewData);
    }
   }


}
