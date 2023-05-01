<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function workshops()
    {
        return $this->hasMany(Event::class, 'event_id', 'id');
    }
    public function future_workshops()
    {
        return $this->hasMany(Event::class, 'event_id', 'id');
    }
}
