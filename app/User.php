<?php

namespace Dadavel;

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
        'name', 
        'email',
        'password', 
        'gpn_number',
        'phone_no',
        'desk_location',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function role()
    {
        return $this->belongsTo('Dadavel\Role');
    }

    public function deliveries()
    {
        return $this->hasMany('Dadavel\deliverydetail');
    }

     public function tasks()
    {
        return $this->belongsToMany('Dadavel\Task');
    }

     public function project()
    {
        return $this->belongsToMany('Dadavel\Project');
    }

    public function comments()
    {
        return $this->morphMany('Dadavel\Comment', 'commentable');
    }
}
