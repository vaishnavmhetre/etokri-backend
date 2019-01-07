<?php

namespace App\Providers;

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
        $providers = [
            \Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
            \Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class
        ];

        foreach ($providers as $provider) {
            app()->registerDeferredProvider($provider);
        }
    }
}
