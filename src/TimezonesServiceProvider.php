<?php

namespace Lararavelnewpackage\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       $this->loadViewsFrom(__DIR__.'/views', 'helo');
       $this->publishes([
        __DIR__.'/views' => base_path('resources/views/lararavelnewpackage/timezones'),
       ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Lararavelnewpackage\Timezones\TimezonesController');
        $this->app->make('Lararavelnewpackage\Timezones\MyController');


    }
}
