<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

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
    public function boot(Request $request)
    {
          // Force HTTPS if the request comes from an ngrok tunnel
    if (str_contains($request->headers->get('X-Original-Host') ?? '', 'ngrok') || 
        str_ends_with($request->getHost(), '.ngrok-free.app')) {
        URL::forceScheme('https');
    }
    }
}
