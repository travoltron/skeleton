<?php

namespace League\Skeleton;
use Illuminate\Support\ServiceProvider;

class SkeletonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/routes.php';
        // Publish configuration file
        $this->publishes([
            __DIR__.'/config/skeleton.php' => config_path('skeleton.php')
        ], 'config');

        // Publish migrations for use
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        // Transfers specific commands that will be called
        $this->commands($this->commands);
    }

    protected $commands = [
        commands\SkeletonCommand::class,
    ];

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(:Skeleton::class, function ($app) {
            return new :Skeleton($app);
        });
    }
}


