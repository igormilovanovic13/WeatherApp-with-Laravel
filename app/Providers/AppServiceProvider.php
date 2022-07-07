<?php

namespace App\Providers;

use App\Services\Openweather;
use App\Services\Weather;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Weather::class, function (){
            $config = [
                'key' => config('services.openweather.key')
            ];

            return new Openweather($config);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
