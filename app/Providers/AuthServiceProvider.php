<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use App\Post;
use App\User;
use App\Permission;
use App\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
//        \App\Post::class => \App\Policies\PostPolicy::class,
    ];

    protected function getPermission()
    {
        try
        {
            $permissions = Permission::with('roles')->get();
            foreach ($permissions as $permission)
            {
                $gate->define($permission->name, function(User $user) use ($permission){
                    return $user->hasPermission($permission);
                });
            }
        }
        catch (\Exception $e)
        {
            return [];
        }

    }

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();

        //

        /*$gate->define('update', function(User $user, Post $post){
            return $user->id == $post->user_id;
        });*/

        $this->getPermission();



    }
}
