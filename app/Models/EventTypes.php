<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventTypes extends Model
{
    use HasFactory;
    protected $fillable = ['event_name', 'location'];

    public function events()
    {
        return $this->belongsToMany(Events::class, 'events_event_types')->withTimestamps();
    }
}
