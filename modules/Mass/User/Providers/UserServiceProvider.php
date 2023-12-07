<?php

namespace Mass\User\Providers;

use Illuminate\Support\ServiceProvider;
use Mass\User\Models\User;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/user_routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
        $this->loadFactoriesFrom(__DIR__.'/../Database/Factories');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views','User');

    }

    public function boot()
    {
        config()->set('auth.providers.users.model',User::class);
    }

}
