<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','photo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){

        return $this->belongsTo('App\Role');


    }
    public function userprofile(){
        return $this->belongsTo('App\UserProfile');
    }


    public function contact(){


        return $this->belongsTo('App\Contact');


    }
    public function photo(){


        return $this->belongsTo('App\Photo');


    }

    public function posts(){


        return $this->hasMany('App\Post');


    }



    public function getGravatarAttribute(){


        $hash = md5(strtolower(trim($this->attributes['email']))) . "?d=mm&s=";
        return "http://www.gravatar.com/avatar/$hash";


    }

}
