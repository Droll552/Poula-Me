<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
    public function boot()
    {
        Model::unguard();


        Gate::define('admin', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('superadmin', function (User $user) {
            return $user->username === 'Luna';
        });

        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });

        Blade::if('superadmin', function () {
            return request()->user()?->can('superadmin');
        });


    }
}
