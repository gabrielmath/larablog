<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Permission;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(\App\Role::class);
    }

    public function hasPermission(\App\Permission $permission)
    {
        return $this->hasAnyRoles($permission->roles);
    }

    public function hasAnyRoles($roles)
    {
        if(is_array($roles) || is_object($roles))
        {
            return !! $roles->intersect($this->roles)->count();
        }

        return $this->roles->contains('name', $roles);
    }




    // ===============  MINHA FUNÇÃO DE RETORNO DE VALIDAÇÃO ====================================//
    // --------------- (deu mó trabalho essa porra) --------------------------------------------//
    /*public function hasAnyRoles($roles)
    {

        if(is_array($roles) || is_object($roles))
        {
            $user_roles = auth()->user()->roles;
            foreach($roles as $role)
            {
                foreach ($user_roles as $user_role)
                {
                    $r = (string) $role->name;
                    $ur = (string) $user_role->name;

                    if($r == $ur)
                    {
                        return $this->hasAnyRoles($user_role->name);
                    }
                }
            }
        }
            return $this->roles->contains('name', $roles);
    }*/
    
    /*public function posts()
    {
        return $this->hasMany(Post::class);
    }*/
}
