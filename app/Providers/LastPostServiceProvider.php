<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LastPostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            ['layouts.footer'],
            'App\Http\ViewComposers\LastPostComposer'
        );
    }
}
