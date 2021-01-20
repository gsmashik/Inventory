<?php

namespace olee\Inventory;

use Illuminate\Support\ServiceProvider;

class InventoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('olee\inventory\controllers\ItemsController');
        $this->loadViewsFrom(__DIR__.'/views', 'inventory');

        $this->app->make('olee\inventory\controllers\SalesOrderController');
        $this->loadViewsFrom(__DIR__.'/views', 'inventory');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        // publish css jss aseet in 
        $this->publishes([
            __DIR__.'/views/vendor' => base_path('public/olee/inventory'),
        ]);

    }
}
