<?php

namespace Laurel\Menu\App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Service provider for including commands, helpers, migrations and files with config.
 *
 * Class MultiRouteServiceProvider
 * @package Laurel\MultiRoute\App\Providers
 */
class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHelper();
    }


    /**
     * Registering file with helper functions
     *
     * @return void
     */
    private function registerHelper()
    {
        $helperFilePath = __DIR__ . '/../Helpers/functions.php';
        if (file_exists($helperFilePath)) {
            require_once($helperFilePath);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . "/../../database/migrations");
        $this->mergeConfigFrom(__DIR__ . "/../../config/menu.php", 'menu');
        $this->publishes([
            __DIR__ . "/../../config/menu.php" => config_path('/menu.php')
        ], 'config');
    }
}
