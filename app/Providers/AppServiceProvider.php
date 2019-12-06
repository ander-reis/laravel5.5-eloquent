<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //para não deixar excluir a tabela soccerTeams por causa da relação
        if(config('database.default') == 'sqlite'){
            \DB::connection()->getPdo()->exec('PRAGMA foreign_keys=on;');
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
