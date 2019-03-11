<?php

namespace BinaryCabin\LaravelToolbelt\Providers;

use Illuminate\Support\ServiceProvider;
use BinaryCabin\LaravelToolbelt\LaravelToolbelt;

class LaravelToolbeltServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->commands([
                \BinaryCabin\LaravelToolbelt\Commands\MakeUser::class,
                \BinaryCabin\LaravelToolbelt\Commands\InitiateRoles::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-toolbelt', function () {
            return new LaravelToolbelt();
        });
    }
}
