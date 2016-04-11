<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Eloquent\Subscriber\Phrase as PhraseListener;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(PhraseListener $phraseListener)
    {
        $phraseListener->register();
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
