<?php

namespace EzitisItIs\ComponentFactory\Providers;

use Illuminate\Support\ServiceProvider;

class ComponentFactoryServiceProvider extends ServiceProvider

{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/component-factory.php',
            'component-factory'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/component-factory.php' => config_path('component-factory.php'),
        ], 'component-factory-config');
    }
}