<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Queue::failing(function (JobFailed $event) {
        //     // $event->connectionName
        //     // $event->job
        //     // $event->exception
        //     \Log::alert('--------队列运行失败sssssssssssssss');
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
