<?php

namespace Popica80\FastJWT;

use Popica80\FastJWT\FastJWT;
use Illuminate\Support\ServiceProvider;

class FastJWTServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('fast-jwt', function () {
            return new FastJWT();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
