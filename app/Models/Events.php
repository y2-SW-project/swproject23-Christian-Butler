<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = ['date', 'start_time'];
    protected $guarded = ['venues_id', 'artist_id'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }

    public function event_types()
    {
        return $this->belongsToMany(Event_Types::class)->withTimestamps();
    }
}
