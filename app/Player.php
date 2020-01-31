<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = [];

    public function Event(){
        return $this->belongsTo( Event::class, 'event_id','id');
    }

    public function Team(){
        return $this->belongsTo( Team::class, 'team_id','id');
    }
}
