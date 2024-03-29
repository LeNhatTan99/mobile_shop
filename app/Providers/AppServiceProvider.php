<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
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
            $view ->with('categories',$categories);
            $view ->with('brands',$brands);
        });
        Paginator::useBootstrap();

    }
}
