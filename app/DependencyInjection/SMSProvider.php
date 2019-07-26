<?php

namespace App\DependencyInjection;

use Illuminate\Support\ServiceProvider;

class SMSProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SMSContract::class, function ($app) {
            return new NexmoService;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
