<?php

namespace Heddiyoussouf\johhdi\Providers;

use Illuminate\Support\ServiceProvider;
use Heddiyoussouf\johhdi\johhdi;
class JohhdiProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
        $this->app->bind('johhdi', function($app) {
            return new Johhdi();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/youcef.php' => config_path('youcef.php'),
        ]);
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/joh'),
        ]);
    }
}
