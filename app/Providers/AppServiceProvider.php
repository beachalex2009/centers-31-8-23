<?php

namespace App\Providers;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\Paginator;
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
            /* Paginator::defaultView('vendor.pagination.bootstrap-5');

            Paginator::defaultSimpleView('vendor.pagination.simple-bootstrap-5'); */

            JsonResource::withoutWrapping();
    }
}
