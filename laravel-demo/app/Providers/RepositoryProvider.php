<?php

namespace App\Providers;

use App\Repositories\EmployeeMySqlRepository;
use App\Repositories\EmployeeMSSqlRepository;
use App\Repositories\EmployeeRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
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
        // if (true) {
        //     $this->app->bind(EmployeeRepositoryInterface::class, EmployeeMySqlRepository::class);
        // } else {
        //     $this->app->bind(EmployeeRepositoryInterface::class, EmployeeMSSqlRepository::class);
        // }
        $this->app->bind(EmployeeRepositoryInterface::class, EmployeeMySqlRepository::class);
    }
}
