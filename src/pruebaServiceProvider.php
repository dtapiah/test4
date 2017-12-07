<?php

namespace danilo\prueba;

use Illuminate\Support\ServiceProvider;

class pruebaServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/danilo/prueba'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('danilo\prueba\PruebaController');
        $this->loadViewsFrom(__DIR__.'/views', 'prueba');
    }
}