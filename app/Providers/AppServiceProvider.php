<?php

namespace App\Providers;
use App\Globals;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    protected $globals;
    public function __construct()
    {
        $this->globals = new Globals();
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('layouts.sidebar', function($view) {
            $view->with('categories', $this->globals->categories());
            $view->with('mostly_viewed_products', $this->globals->mostly_viewed_products());
        });
    }
}
