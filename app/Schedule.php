<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = [];

    public function Team1(){
        return $this->belongsTo( Team::class, 'team1_id','id');
    }

    public function Team2(){
        return $this->belongsTo( Team::class, 'team2_id','id');
    }

    public function Event(){
        return $this->belongsTo( Event::class, 'event_id','id');
    }
}
