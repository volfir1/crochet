<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class JsonDataProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $products = json_decode(file_get_contents(storage_path('app/products.json')), true);

        $this->app->singleton('products', function () use ($products) {
            return $products;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
