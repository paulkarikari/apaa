<?php

namespace Apaa\Providers;

use Illuminate\Support\ServiceProvider;
use Apaa\Models\Category\CategoryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('CategoryInterface', function (){
            return new CategoryRepository;
        });
    }
}
