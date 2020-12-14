<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use App\Charts\InscricoesChart;
use Illuminate\Support\ServiceProvider;
use ConsoleTVs\Charts\Registrar as Charts;

class AppServiceProvider extends ServiceProvider
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
    public function boot(Charts $charts)
    {
        Schema::defaultStringLength(191);

        //
        $charts->register([
            InscricoesChart::class
        ]);
    }
}
