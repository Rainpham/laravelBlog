<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CategoryModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('fontend.layout.menu',function($view){
            $db = CategoryModel::all();
            $view->with('db',$db);
        });
         view()->composer('fontend.layout.footer',function($view){
            $db = CategoryModel::all();
            $view->with('db',$db);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
