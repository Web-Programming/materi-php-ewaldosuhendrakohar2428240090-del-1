<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\\Models\\Model' => 'App\\Policies\\ModelPolicy',
    ];

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
        $this->registerPolicies();

        // Untuk mengelola product hanya dilakukan oleh admin
        Gate::define('manage-products', function (User $user) {
            return $user->role === 'admin';
        });

        // Untuk update product dapat dilakukan oleh admin dan sales
        Gate::define('update-product', function (User $user) {
            return $user->role === 'admin' || $user->role === 'sales';
        });

        // Untuk menghapus product hanya dilakukan oleh admin
        Gate::define('delete-product', function (User $user) {
            return $user->role === 'admin';
        });

        // Untuk membuat product dapat dilakukan oleh user yang sudah login
        Gate::define('create-product', function (User $user) {
            return $user->role === 'sales';
        });
    }
}
