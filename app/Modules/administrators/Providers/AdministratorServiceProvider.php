<?php

namespace Administrators\Providers;

use Illuminate\Support\ServiceProvider;

class AdministratorServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $ds = DIRECTORY_SEPARATOR;
        $this->loadRoutesFrom(__DIR__ . $ds . '..' . $ds . 'routes' . $ds . 'administrator.php');
    }
}
