<?php

namespace Heddiyoussouf\Johhdi\Providers;

use Illuminate\Support\ServiceProvider;
use Heddiyoussouf\Johhdi\Joh;
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
        $this->app->bind('Joh', function($app) {
            return new Joh();
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
