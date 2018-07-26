<?php

namespace nattaponra\LaravelShop;

use Illuminate\Support\ServiceProvider;

class LaravelShopServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([__DIR__.'/config/config.php' => config_path('laravel-shop.php'),]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
