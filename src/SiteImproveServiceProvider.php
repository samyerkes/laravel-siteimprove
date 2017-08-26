<?php

namespace VCU\SiteImprove;

use Illuminate\Support\ServiceProvider;

class SiteImproveServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/siteimprove.php' => config_path('siteimprove.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('VCU\SiteImprove\SiteImprove');
    }
}
