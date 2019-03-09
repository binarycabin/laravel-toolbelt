<?php

namespace BinaryCabin\LaravelToolbelt\Providers;

use BinaryCabin\LaravelToolbelt\LaravelToolbelt;
use Illuminate\Support\ServiceProvider;

class LaravelToolbeltServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-toolbelt',function(){
            return new LaravelToolbelt();
        });
    }
}