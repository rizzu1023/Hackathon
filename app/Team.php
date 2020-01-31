<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];

    public function Player(){
        return $this->hasMany(Player::class,'team_id','id');
    }
    public function Schedule1(){
        return $this->hasMany(Schedule::class,'team1_id','id');
    }
    public function Schedule2(){
        return $this->hasMany(Schedule::class,'team2_id','id');
    }
}
