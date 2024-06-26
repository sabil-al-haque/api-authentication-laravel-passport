<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Register the routes necessary to issue access tokens and revoke access tokens, clients, and personal access tokens.
        Passport::routes();

        // Optionally, you can set Passport token expiration here.
        // Passport::tokensExpireIn(now()->addDays(15));
        // Passport::refreshTokensExpireIn(now()->addDays(30));
    }
}
