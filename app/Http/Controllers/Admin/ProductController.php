<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;

class ProductController extends Controller
{
/**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'=>['required','string'],
            'price'=>['required','numeric'],
            'discount'=>['required','numeric'],
            'color'=>['required','string'],
            'thumbnail'=>['required', 'image'],
            'description'=>['required','string','min:15'],
            'parameter'=>['required','string','min:15'],
            'status'=>['required','between:0,1'],
            'inventory'=>['required','between:0,1000'],
        ]);
    }
    protected function storeImage(Request $request) {
        $path = $request->file('thumbnail')->storeAs('public/mobile_image/product_images', Str::slug($request->name).'.'.'jpg');
        return substr($path, strlen('public/'));
      }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        $brands = Brand::get();
        $products = Product::paginate(5);
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
        $this->validator($request->all())->validate();
        $imageUrl = $this->storeImage($request);
        $data=[

           'name'=>$request->name,
           'price'=>$request->price,
           'discount'=>$request->discount,
           'color'=>$request->color,
           'thumbnail'=>$imageUrl,
           'status'=>$request->status,
           'description'=>$request->description,
           'parameter'=>$request->parameter,
           'inventory'=>$request->inventory,
           'slug' => Str::slug($request->name),

        ];
        DB::beginTransaction();
        try {
          $product =  Product::create($data);
          $product->categories()->sync($request->categoryIds);
          $product->brands()->sync($request->brandIds);
        $fileName = $request->file('thumbnail')->storeAs('mobile_image/product_images', Str::slug($request->name).'.'.'jpg');
            DB::commit();
            return redirect()->route('products.index')->with('success', 'Tạo sản phẩm thành công');
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            DB::rollBack();
            return back()->with('error', 'Tạo sản phẩm thất bại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, Request $request)
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
        $this->validator($request->all())->validate();
        $imageUrl = $this->storeImage($request);
        $data=[

           'name'=>$request->name,
           'price'=>$request->price,
           'discount'=>$request->discount,
           'color'=>$request->color,
           'thumbnail'=>$imageUrl,
           'status'=>$request->status,
           'description'=>$request->description,
           'parameter'=>$request->parameter,
           'inventory'=>$request->inventory,
           'slug' => Str::slug($request->name),

        ];
         DB::beginTransaction();
         try {
           $product ->update($data);
           $product->brands()->sync($request->brandIds);
           $fileName = $request->file('thumbnail')->storeAs('mobile_image/product_images', Str::slug($request->name).'.'.'jpg');
             DB::commit();
             return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công');
         } catch (\Exception $e) {
             //throw $th;
             Log::error($e->getMessage());
             DB::rollBack();
             return back()->with('error', 'Cập nhật sản phẩm thất bại');
         }
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();
            return redirect()->route('products.index')->with('success', 'Xoá sản phẩm thành công');;
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            return back()->with('error', 'Xoá sản phẩm thất bại');
        }
    }


}
