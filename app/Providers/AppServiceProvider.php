<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // For each of the registered modules, include their routes and Views
        $modules = config("module.modules");

        if (count($modules)) {

            foreach ($modules as $key => $module) {
                //Load the routes
                if (file_exists(__DIR__ . '/../../modules/' . $module . '/routes.php')) {
                    $this->loadRoutesFrom( __DIR__ . '/../../modules/' . $module . '/routes.php');
                }
                // Load the views
                if (is_dir(__DIR__ . '/../../modules/' . $module . '/Views')) {
                    $this->loadViewsFrom(__DIR__ . '/../../modules/' . $module . '/Views', $module);
                }
            }
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
