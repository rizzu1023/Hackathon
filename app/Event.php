<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function Schedule(){
        return $this->hasMany(Schedule::class,'id','event_id');
    }

    public function Coordinator(){
        return $this->hasMany(Coordinator::class, 'id','event_id');
    }
}
