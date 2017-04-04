<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


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

    public function hasPermission(Permission $permission)
    {
//        dd($permission->roles());
        return $this->hasAnyRoles($permission->roles);
    }

    public function hasAnyRoles($roles)
    {
        $ar = (array) $roles;
//        echo '<pre>';
//        $cont = count($roles);
//        print_r($cont);
//        echo '</pre>';
        /*print_r($ar);
        print_r($roles);
        echo '</pre>';*/
        if(is_array($roles) || is_object($roles))
        {
            $ro = $roles[0];
            foreach($roles as $role)
            {
//                echo '<pre>';
                var_dump($role->name);

//                echo '</pre>';
//                return $this->hasAnyRoles($role->name);
//                return $this->roles->contains('name', $role['name']);
            }
        }
        else
        {
            /*var_dump($roles);
            return $this->roles->contains('name', $roles);*/
        }
    }
    
    /*public function posts()
    {
        return $this->hasMany(Post::class);
    }*/
}
