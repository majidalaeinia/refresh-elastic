<?php

namespace MajidAlaeinia\RefreshElastic;

use Illuminate\Support\ServiceProvider;

class RefreshElasticServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/refresh-elastic.php', 'refresh-elastic');

        $this->app->singleton('refresh-elastic', function ($app) {
            return new RefreshElastic;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['refresh-elastic'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        $this->publishes([
            __DIR__.'/../config/refresh-elastic.php' => config_path('refresh-elastic.php'),
        ], 'majidalaeinia-refresh-elastic.config');
    }
}
