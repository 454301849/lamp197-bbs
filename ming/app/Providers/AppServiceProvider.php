<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider; 
use App\models\classm;
use App\models\plate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $class = classm::all();
        $plate = plate::all();

        view()->share('classm',$class); 
        view()->share('plate',$plate);   
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
