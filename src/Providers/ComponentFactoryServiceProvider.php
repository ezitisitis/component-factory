<?php

namespace EzitisItIs\ComponentFactory\Providers;

use ComponentFactory\Console\MakeComponent;
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
        $this->registerCommands();
        $this->publishes([
            __DIR__.'/../config/component-factory.php' => config_path('component-factory.php'),
        ], 'component-factory-config');
    }

    /**
     * @return void
     */
    protected function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeComponent::class
            ]);
        }
    }
}
