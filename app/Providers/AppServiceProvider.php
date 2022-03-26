<?php

namespace App\Providers;

use Illuminate\Support\Facades\Request;
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
        Request::macro('admin', function () {
            return $this->getHost() === dashboard();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (request()->admin()) {
            config(['auth.defaults.guard' => 'admin']);
            config(['auth.defaults.passwords' => 'admins']);
        }
    }
}
