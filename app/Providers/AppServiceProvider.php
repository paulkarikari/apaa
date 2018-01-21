<?php

namespace Apaa\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(
            'Apaa\Models\Service\CategoryInterface',
            'Apaa\Models\Service\CategoryRepository'
        );

        $this->app->bind(
            'Apaa\Models\Service\ServiceInterface',
            'Apaa\Models\Service\ServiceRepository'
        );

        $this->app->bind(
            'Apaa\Models\Category\CategoryInterface',
            'Apaa\Models\Category\CategoryRepository'
        );
    }
}
