<?php

namespace App\Providers;

use App\View\Components\Admin;
use Illuminate\Pagination\Paginator;
use App\View\Components\myweb;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::component('my-web', myweb::class);
        Paginator::useBootstrap();

        Blade::component('admin', Admin::class);

        Paginator::defaultView('pagination.my-paginate');
    }
}
