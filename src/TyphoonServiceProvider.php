<?php

namespace Itanea\Typhoon;

use Illuminate\Support\ServiceProvider;

class TyphoonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        //$this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/views', 'typhoon');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/itanea/typhoon'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
