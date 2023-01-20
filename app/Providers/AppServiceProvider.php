<?php

namespace App\Providers;

use App\Models\Logo;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $websiteSetting = Setting::first();
        $websiteLogo = Logo::first();
        View::share('footerSetting',$websiteSetting);
        View::share('logo',$websiteLogo);
    }
}
