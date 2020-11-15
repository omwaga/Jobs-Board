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

        Gate::define('view-admin-dashboard', function($user){
            return $user->hasAnyRoles(['admin', 'company']);
        });

        Gate::define('view-user-dashboard', function($user){
            return $user->hasAnyRoles(['user']);
        });

        Gate::define('manage-users', function($user){
            return $user->hasAnyRoles(['admin']);
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

        Gate::define('manage-interviews', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-posting-subscriptions', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-talent-pools', function($user){
            return $user->hasAnyRoles(['admin', 'company']);
        });

        Gate::define('manage-candidates', function($user){
            return $user->hasAnyRoles(['admin']);
        });

        Gate::define('manage-vacancies', function($user){
            return $user->hasAnyRoles(['admin', 'company']);
        });

        Gate::define('manage-applications', function($user){
            return $user->hasAnyRoles(['admin', 'company']);
        });

        Gate::define('publish-vacancies', function($user){
            return $user->hasAnyRoles(['admin',]);
        });

        Gate::define('manage-user-applications', function($user){
            return $user->hasAnyRoles(['user']);
        });

        Gate::define('create-resume', function($user){
            return $user->hasAnyRoles(['user']);
        });

        Gate::define('apply-job', function($user){
            return $user->hasAnyRoles(['user']);
        });

        Gate::define('edit-users', function($user){
            return $user->hasAnyRoles(['admin', 'company']);
        });
        
        Gate::define('create-users', function($user){
            return $user->hasAnyRoles(['admin', 'company']);
        });

        Gate::define('delete-users', function($user){
            return $user->hasRole('admin');
        });

    }
}
