<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Product_image;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_images = Product_image::paginate(7);
        return view('layouts.product_images.index', ['product_images' => $product_images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::get();
        return view('layouts.product_images.create',['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            $data = [
               'product_id'=>$request->product_id ,
               'image'=>$request->image,
            ];

            // $file = $request->file('image')->store('public/mobile_image');
            $file = $request->get('id') . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/mobile_image', $file);
            $product_image = Product_image::create($data);

      DB::commit();
            return redirect()->route('images.index')->with('success', 'Create product image success');;
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            DB::rollBack();
            return back()->with('error', 'Create product image failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_image  $product_image
     * @return \Illuminate\Http\Response
     */
    public function show(Product_image $product_image)
    {
        return view('layouts.product_images.show', ['product_image' => $product_image]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_image  $product_image
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_image $product_image)
    {
        $products = Product::get();
        return view('layouts.product_images.edit', ['product_image' => $product_image,'products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product_images  $product_images
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product_image $product_image)
    {
        $data = [
            'product_id'=>$request->product_id ,
            'image'=>$request->image,
         ];
        DB::beginTransaction();
        try {
            $file = $request->file('image')->store('public/mobile_image');

            $product_image->update($data);

      DB::commit();
            return redirect()->route('images.index')->with('success', 'Update product image success');;
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            DB::rollBack();
            return back()->with('error', 'Update product image failed');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_image  $product_image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product_image $product_image)
    {
        try {
            $product_image->delete();
            return redirect()->route('images.index')->with('success', 'Delete product image success');;
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            return back()->with('error', 'Delete product image failed');
        }
    }
}
