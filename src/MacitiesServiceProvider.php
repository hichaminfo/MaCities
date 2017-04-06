<?php

namespace Chamhi\MaCities;

use Illuminate\Support\ServiceProvider;

class MacitiesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->publishes([
                            __DIR__.'/database/migrations' => database_path('migrations')
                        ]);

        $this->publishes([
                            __DIR__.'/database/seeds' => database_path('seeds')
                        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->make('Chamhi\MaCities\MaCitiesController');
    }

}
