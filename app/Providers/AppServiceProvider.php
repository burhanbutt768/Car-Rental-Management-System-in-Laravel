<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Http\Middleware\AdminMiddleware;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register any bindings or services if needed
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Manually register middleware (if Kernel.php is not available)
        $this->app['router']->aliasMiddleware('admin', AdminMiddleware::class);
    }
}
