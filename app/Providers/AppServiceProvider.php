<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Eloquent\Subscriber\Advice as AdviceListener;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(AdviceListener $adviceListener)
    {
        $adviceListener->register();
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
