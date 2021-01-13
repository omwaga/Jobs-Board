<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile_picture', 'designation', 'about', 'show_profile', 'provider_name', 'provider_id', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function selectedLevel()
    {
        return $this->belongsTo(UserLevel::class, 'id', 'user_id');
    }

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'user_id', 'id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'employer_id', 'id');
    }

    public function pools()
    {
        return $this->hasMany(TalentPool::class, 'user_id', 'id');
    }

    public function hasRole($role)
    {
        if($this->roles()->where('name', $role)->first())
        {
            return true;
        }
        return false;
    }

    public function hasAnyRoles($roles)
    {
        if($this->roles()->whereIn('name', $roles)->first())
        {
            return true;
        }
        return false;
    }

}
