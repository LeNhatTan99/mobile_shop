<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Cart;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('frontend.app',function($view){
            $categories = Category::get();
            $brands = Brand::get();
            $products = Product::get();
            $view ->with('categories',$categories);
            $view ->with('brands',$brands);
            $view ->with('products',$products);

        });

    }
}
