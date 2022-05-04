<?php

namespace Implement\Crud;

use Illuminate\Support\ServiceProvider;

class CRUDServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ .  '/Routes/CRUDRoute.php');
        $this->loadViewsFrom(__DIR__.'/Views/products','products');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
