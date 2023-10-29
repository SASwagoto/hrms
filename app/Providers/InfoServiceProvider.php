<?php

namespace App\Providers;

use App\Models\Department;
use App\Models\Site;
use App\Models\Team;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class InfoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $siteInfo = Site::firstOrFail();
            $view->with('siteInfo', $siteInfo);
        });

        View::composer('*', function ($view) {
            $teams = Team::active()->get();
            $view->with('teams', $teams);
        });
    }
}
