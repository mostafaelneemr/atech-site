<?php

namespace App\Providers;

use App\Auth\ApiAuth;
use App\Auth\DBSessionAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }

        set_time_limit(0);
        Schema::defaultStringLength(191);

        // DBSessionAuth Auth Provider
        Auth::extend('DBSessionAuth', function($app,$name, array $config) {
            $providerData = config('auth.providers.'.$config['provider']);
            return new DBSessionAuth($providerData['model'],$name);
        });

        Auth::extend('ApiAuth', function($app,$name, array $config) {
            $providerData = config('auth.providers.'.$config['provider']);
                return new ApiAuth($providerData['model'],$name);
        });
    }
}
