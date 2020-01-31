<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinator extends Model
{
    protected $guarded = [];

    public function Event(){
        return $this->belongsTo( Event::class, 'event_id','id');
    }
}
