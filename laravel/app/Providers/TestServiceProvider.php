<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TestService;

class TestServiceProvider extends ServiceProvider
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
        //

        #1. bind 简单绑定
        $this->app->bind('App\Services\TestService', function ($app) {
            return new TestService();
        });

        #2. singleton 绑定一个单例
        $this->app->singleton('test', function ($app) {
            return new TestService();
        });
    }
}
