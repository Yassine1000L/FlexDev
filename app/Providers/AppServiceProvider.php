<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $host = request()->getHttpHost();
        if (!str_contains($host, '127.0.0.1') && !str_contains($host, 'localhost') && !str_contains($host, '.test')) {
            URL::forceScheme('https');
        }

    }
}
