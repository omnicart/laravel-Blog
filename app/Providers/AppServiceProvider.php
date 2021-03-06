<?php

namespace App\Providers;

use Illuminate\Support\facades\schema;
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
         schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Spatie\Flash\Flash::levels([
    'success' => 'alert alert-success',
    'warning' => 'alert alert-warning',
    'error' => 'alert alert-error',
]);
    }
}
