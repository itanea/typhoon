<?php

namespace itanea\typhoondashboard;

use Illuminate\Support\ServiceProvider;

class TyphoondashboardServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/views', 'typhoondashboard');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/itanea/typhoondashboard'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('itanea\typhoondashboard\DashboardController');
    }
}
