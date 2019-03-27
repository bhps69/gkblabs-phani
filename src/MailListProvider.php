<?php

namespace Gkblabs\Phani;
use Log;
use Illuminate\Support\ServiceProvider;

class MailListProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Log::info('in register method');
        $this->publishes([
            __DIR__.'/src/database/migrations/' => database_path('migrations')
        ], 'migrations');
        //$this->app->make('Gkblabs\Phani\database\migrations\Createclient');
        $this->app->make('Gkblabs\Phani\MailsController');
        $this->app->make('Gkblabs\Phani\mailSearchController');
        $this->app->make('Gkblabs\Phani\InsertUserController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Log::info('in boot method');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
       $this->loadMigrationsFrom(__DIR__.'/src/database/migrations');

    }
}
