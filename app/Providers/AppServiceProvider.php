<?php

namespace App\Providers;

use App\Models\Favicon;
use App\Models\Iframe;
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
        $websiteFavicon = Favicon::first();
        $contactIframe = Iframe::first();
        View::share('footerSetting',$websiteSetting);
        View::share('logo',$websiteLogo);
        View::share('favicon',$websiteFavicon);
        View::share('iframe',$contactIframe);
    }
}
