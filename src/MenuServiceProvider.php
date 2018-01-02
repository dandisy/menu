<?php

namespace Webcore\Menu;

use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/routes.php';
        
        $this->loadViewsFrom(__DIR__.'/views', 'menu');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/webcore/menu'),
        ], 'views');

        $this->publishes([
            __DIR__.'/models' => app_path('Models'),
        ], 'models');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
