<?php

namespace App\Providers;

use App\Patterns\Adapter\Classes\EmailNotification;
use App\Patterns\Adapter\Classes\OtherEmailNotification;
use App\Patterns\Adapter\Classes\OtherEmailNotificationAdapter;
use App\Patterns\Adapter\Interfaces\iNotification;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public array $bindings = [
       iNotification::class => OtherEmailNotificationAdapter::class
    ];
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
        //
    }
}
