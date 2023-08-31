<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\Programme;
use App\Models\Information;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $info = Information::first();
        $cats = Category::whereActived('1')->get();
        
        view()->share([
            'info'=>$info,
            'categories'=>$cats,
            'pe'=>Programme::whereActived('1')->get()
        ]);
        Paginator::useBootstrap();
        Schema::defaultStringLength(200);
        Carbon::setlocale('fr');
    }
}
