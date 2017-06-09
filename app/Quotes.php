<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    protected $fillable = [
        'name', 'email', 'note'
    ];
    public function contact(){


        return $this->belongsTo('App\Contact');


    }

    public function posts(){


        return $this->belongsTo('App\Post');


    }


}
