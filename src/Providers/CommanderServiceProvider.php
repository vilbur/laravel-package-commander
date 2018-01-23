<?php namespace Vilbur\Commander\Providers;

use Illuminate\Support\ServiceProvider;


class CommanderServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(){

        //$this->app->bind('CommandBus', function(){
        //    return new \Vilbur\Commander\CommandBus;
        //});

    }

}
