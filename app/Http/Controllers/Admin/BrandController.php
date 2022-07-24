<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
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
            'name' => ['required', 'string', 'max:255'],
            'logo'=>['required', 'image'],
        ]);
    }
    protected function storeImage(Request $request) {
        $path = $request->file('logo')->storeAs('public/mobile_image/logo', $request->name.'.'.'jpg');
        return substr($path, strlen('public/'));
      }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::get();
        return view('layouts.brands.index', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.brands.create');
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
        DB::beginTransaction();
        try {

            $data = [
                'name'=>$request->name,
                'logo'=> $imageUrl,
                'slug' => Str::slug($request->name),
            ];
            Brand::create($data);

      DB::commit();
            return redirect()->route('brands.index')->with('success', 'Create brand success');;
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            DB::rollBack();
            return back()->with('error', 'Create brand failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('layouts.brands.show', ['brand' => $brand]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)

    {
        return view('layouts.brands.edit', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validator($request->all())->validate();
        $imageUrl = $this->storeImage($request);
        DB::beginTransaction();
        try {

            $data = [
                'name'=>$request->name,
                'logo'=> $imageUrl,
                'slug' => Str::slug($request->name),
            ];
            $brand->update($data);
            DB::commit();
         return redirect()->route('brands.index')->with('success', 'Update brand success');;
     } catch (\Exception $e) {
         //throw $th;
         Log::error($e->getMessage());
         return back()->with('error', 'Update brand failed');
     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        try {
            $brand->delete();
            return redirect()->route('brands.index')->with('success', 'Delete brand success');;
        } catch (\Exception $e) {
            //throw $th;
            Log::error($e->getMessage());
            return back()->with('error', 'Delete brand failed');
        }
    }
}
