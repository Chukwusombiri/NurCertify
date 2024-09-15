<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
    public function boot()
    {
        $copyrightdate = getdate();
        $copyrightyear = $copyrightdate["year"];
        View::share(['email'=>'info@shiziacademy.com','phone'=>'+1 856 319-3461', 'copyrightyear' => $copyrightyear]);
    }
}
