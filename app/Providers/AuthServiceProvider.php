<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-users', function($user){
            return $user->hasAnyRoles(['admin', 'company']);
        });

        Gate::define('manage-companies', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-locations', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-categories', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-jobtypes', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-posting-subscriptions', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-vacancies', function($user){
            return $user->hasAnyRoles(['admin', 'company']);
        });

        Gate::define('edit-users', function($user){
            return $user->hasAnyRoles(['admin', 'company']);
        });

        Gate::define('delete-users', function($user){
            return $user->hasRole('admin');
        });

    }
}
