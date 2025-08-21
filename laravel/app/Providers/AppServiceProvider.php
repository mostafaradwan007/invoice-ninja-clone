<?php

namespace App\Providers;

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
         if (!function_exists('csrf_field')) {
        function csrf_field() {
            return '<input type="hidden" name="_token" value="' . csrf_token() . '">';
        }
    }
        //
    }
}
// في ملف app/Providers/AppServiceProvider.php في دالة boot()
