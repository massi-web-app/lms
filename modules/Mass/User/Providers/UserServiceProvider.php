<?php

namespace Mass\User\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Mass\User\Models\User;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        config()->set('auth.providers.users.model',User::class);
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../Routes/user_routes.php');
        $this->loadMigrationsFrom(__DIR__.'/../Database/migrations');
        $this->loadFactoriesFrom(__DIR__.'/../Database/Factories');
        $this->loadViewsFrom(__DIR__.'/../Resources/Views','User');
        View::addNamespace('UserMarkDownEmail',__DIR__.'/../Resources/Views');
    }

}
