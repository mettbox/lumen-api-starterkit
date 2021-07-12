<?php

namespace Modules\Cards\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CardServiceProvider extends ServiceProvider
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
        Route::group([
            'prefix' => 'api',
            'namespace' => 'Modules\Cards\Controllers',
            'middleware' => null,
        ], function () {
            $this->loadRoutesFrom(__DIR__. '/../routes.php');
        });
    }
}
