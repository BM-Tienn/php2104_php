<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use App\View\Components\MyShop;
use App\View\Components\Admin;
use Illuminate\Pagination\Paginator;

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
        //khai bao bien dung chung
        View::share('key', 'PHP2104');
        View::share('test', ['a', 'b', 'c']);

        Blade::component('my-shop', MyShop::class);
        Blade::component('admin', Admin::class);

        Paginator::defaultView('pagination.my-paginate');
    }

}
