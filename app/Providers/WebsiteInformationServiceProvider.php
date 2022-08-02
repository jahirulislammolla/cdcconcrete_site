<?php

namespace App\Providers;

use App\Models\WebsiteInfo;
use Illuminate\Support\ServiceProvider;

class WebsiteInformationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $website_data = WebsiteInfo::where("status", 1)->get();
        $website_info = [];
        foreach ($website_data as $key => $value) {
            $website_info[$value->type_name] = [$value->title, $value->value];
        }
        view()->share('website_info',$website_info);
    }
}
