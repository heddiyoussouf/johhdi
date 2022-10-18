<?php

namespace Heddiyoussouf\Johhdi\Providers;

use Illuminate\Support\ServiceProvider;
use Heddiyoussouf\Johhdi\Ping;
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
        $this->app->bind('ping', function($app) {
            return new Ping();
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
