<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    $this->app->bind('settings', function ($app) {
        return new Setting();
    });
    $loader = \Illuminate\Foundation\AliasLoader::getInstance();
    $loader->alias('Setting', Setting::class);
}

    /**
 * Register services.
 *
 * @return void
 */
public function register()
{
    $this->app->bind('settings', function ($app) {
        return new Setting();
    });
    $loader = \Illuminate\Foundation\AliasLoader::getInstance();
    $loader->alias('Setting', Setting::class);
}
}
