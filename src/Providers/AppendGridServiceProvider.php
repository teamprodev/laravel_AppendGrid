<?php

namespace Teamprodev\AppendGrid\Providers;

use Illuminate\Support\ServiceProvider;

class AppendGridServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->publishes([
            __DIR__ . '/../resources/views/components/' => base_path('resources/views/components'),
            __DIR__ . '/../resources/views/sample_datatable/' => base_path('resources/views/sample_datatable'),
            __DIR__ . '/../View/Components/' => base_path('app/View/Components'),
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
