<?php

namespace App\Providers;

use App\Settings\DetailSettings;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('setting', app(DetailSettings::class));
        View::share('navbar_pages', \App\Models\Page::query()->where('is_active',true)->orderBy('ordering')->get());
        View::share('navbar_services', \App\Models\Service::query()->where('is_active',true)->orderBy('ordering')->get());
    }
}
