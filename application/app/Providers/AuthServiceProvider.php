<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    
        /**
         * Register any authentication / authorization services.
         */
        public function boot()
        {
            $this->registerPolicies();
    
            // Gate to check if the user is a professor
            Gate::define('access-professor-pages', function (User $user) {
                return $user->role === 'professeur';
            });
    
            // Gate to check if the user is a student
            Gate::define('access-student-pages', function (User $user) {
                return $user->role === 'eleve';
            });
    
            // Gate to restrict access to module/notes/evaluation management
            Gate::define('manage-modules', function (User $user) {
                return $user->role === 'professeur';
            });
    
            Gate::define('manage-notes', function (User $user) {
                return $user->role === 'professeur';
            });
    
            Gate::define('manage-evaluations', function (User $user) {
                return $user->role === 'professeur';
            });
        }
    
}
