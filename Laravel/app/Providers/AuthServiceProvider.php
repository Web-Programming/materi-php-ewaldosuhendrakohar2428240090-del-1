<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\ServicesProvider; 
class AuthServiceProvider extends ServiceProvider
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
        // untuk mengelola produk hanya dilakukan oleh admin
        gate::define('Manage-Products', function ($user) {
            return $user->role === 'admin';
        });
        // untuk mengupdate produk hanya dilakukan oleh admin atau sales
        gate::define('update-Products', function (user $user) {
            return $user->role === 'admin' || $user->role === 'sales';
        });
        // untuk menghapus produk hanya dilakukan oleh admin
        gate::define('delete-Products', function (user $user) {
            return $user->role === 'admin';
        });
        // untuk membuat produk hanya dilakukan oleh user yang sudah login
        gate::define('create-Products', function (user $user) {
            return $user === 'sales';
        });
        
}
}
