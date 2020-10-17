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

        Gate::define('admin-gate', function($user){
            return $user->hasRole('Administrador');   // role_id = 3 : admin
        });

        Gate::define('employee-gate', function($user){
            return $user->hasRole('Empleado');   // role_id = 2 : employee
        });

        Gate::define('adm-emp-gate', function($user){
            return $user->hasAnyRoles(['Empleado', 'Administrador']);   // role_id = 2 or 3: employee or admin
        });

        Gate::define('client-gate', function($user){
            return $user->hasRole('Cliente');   // role_id = 1 : client
        });
    }
}
