<?php

namespace TahsinGokalp\LettConstants;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        // Register language files
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'lett-constants');

        //Publish language files
        $this->publishes([
            __DIR__ . '/../lang' => $this->app->langPath('vendor/lett-constants'),
        ]);
    }

    public function register(): void
    {
    }
}
