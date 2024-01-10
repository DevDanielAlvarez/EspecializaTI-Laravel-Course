<?php

namespace App\Providers;

use App\Repositories\Interfaces\{SupportRepositoryInterface};
use App\Repositories\Eloquent\{SupportEloquentORM};
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Support bind ORM
        $this->app->bind(SupportRepositoryInterface::class,SupportEloquentORM::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
