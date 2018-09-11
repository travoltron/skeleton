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
        // Include routes
        include __DIR__.'/routes/routes.php';
        // Publish configuration file
        $this->publishes([
            __DIR__.'/config/skeleton.php' => config_path('skeleton.php')
        ], 'config');
        // Load translations
        $this->loadTranslationsFrom(__DIR__.'/translations', ':package_name');
        // Publis translations
        $this->publishes([
            __DIR__.'/translations' => resource_path('lang/:vendor/:package_name'),
        ]);
        // Load views
        $this->loadViewsFrom(__DIR__.'/views', ':package_name');
        // Publish views
        $this->publishes([
            __DIR__.'/views' => resource_path('views/:vendor/:package_name'),
        ]);
        // Load migrations
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


