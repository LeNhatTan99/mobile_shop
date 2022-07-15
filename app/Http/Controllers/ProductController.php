<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateUpdateProductRequest;
use App\Models\Category;
use App\Models\Brand;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        $brands = Brand::get();
        $products = Product::paginate(7);
        return view('layouts.products.index', ['products' => $products], ['categories' => $categories], ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view('layouts.products.create', ['categories' => $categories,'brands' => $brands]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[

           'name'=>$request->name,
           'price'=>$request->price,
           'discount'=>$request->discount,
           'color'=>$request->color,
           'thumbnail'=>$request->thumbnail,
           'description'=>$request->description,
           'inventory'=>$request->inventory,

        ];
        DB::beginTransaction();
        try {

          $product =  Product::create($data);
          $product->categories()->sync($request->categoryIds);
          $product->brands()->sync($request->brandIds);
          $file = $request->file('thumbnail')->storeAs('mobile_image/product_images', $request->name.'.'.'jpg');
            DB::commit();
            return redirect()->route('products.index')->with('success', 'Create product success');
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            DB::rollBack();
            return back()->with('error', 'Create product failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('layouts.products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        $brands = Brand::get();
        return view('layouts.products.edit', ['product' => $product,'brands'=>$brands,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // $categories = Category::get();
        // $brands = Brand::get();
        $data=[

            'name'=>$request->name,
            'price'=>$request->price,
            'discount'=>$request->discount,
            'color'=>$request->color,
            'thumbnail'=>$request->thumbnail,
            'description'=>$request->description,
            'inventory'=>$request->inventory,

         ];
         DB::beginTransaction();
         try {
           $product ->update($data);
           $product->brands()->sync($request->brandIds);
           $file = $request->file('thumbnail')->storeAs('mobile_image/product_images', $request->name.'.'.'jpg');
             DB::commit();
             return redirect()->route('products.index')->with('success', 'Create product success');
         } catch (\Exception $e) {
             //throw $th;
             Log::error($e->getMessage());
             DB::rollBack();
             return back()->with('error', 'Create product failed');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('products.index')->with('success', 'Delete product success');;
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            return back()->with('error', 'Delete product failed');
        }
    }
}
