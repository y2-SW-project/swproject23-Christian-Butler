<?php

namespace Database\Seeders;
use App\Models\Event_Types;
use App\Models\Events;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Event_Types::factory()->times(50)->create();

        foreach(Events::all() as $event)
        {
            $eventtypes = Event_Types::inRandomOrder()->take(rand(1,3))->pluck('id');
            $event->eventtypes()->attach($eventtypes);
        }


    }
}
