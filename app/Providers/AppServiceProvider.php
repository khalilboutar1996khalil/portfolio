<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        // Read the locale straight off the URL path segment rather than a matched
        // route parameter, so it's also correct on 404s (e.g. /fr/typo never
        // matches a route, so the {locale} route-group middleware never runs).
        $segment = request()->segment(1);
        $locale = in_array($segment, ['en', 'fr']) ? $segment : 'en';

        app()->setLocale($locale);
        URL::defaults(['locale' => $locale]);
    }
}
