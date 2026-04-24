<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();

        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        if (config('database.default') === 'sqlite') {
            $sourcePath = database_path('database.sqlite');
            $runtimePath = '/tmp/database.sqlite';

            if (is_file($sourcePath) && !is_file($runtimePath)) {
                copy($sourcePath, $runtimePath);
            }

            if (is_file($runtimePath)) {
                config(['database.connections.sqlite.database' => $runtimePath]);
            }
        }

    }
}
