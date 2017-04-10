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
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

///relationships
    public function feedbacks(){
        $this->hasMany('App\Fback');
    }
    public function emailsubscribes(){
        $this->hasMany('App\EmailSubscription');
    }
    public function getName(){
        return $this->username;
    }
    public function getAvatarUrl()
    {
        return "https:/www.gravatar.com/avatar/{{ md5($this->email)}}?d=mm&s=40";
    }
}
