<?php

namespace Database\Seeders;
use App\Models\EventTypes;
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
        
        EventTypes::factory()->times(50)->create();

        foreach(Events::all() as $event)
        {
            $eventtypes = EventTypes::inRandomOrder()->take(rand(1,3))->pluck('id');
            $event->event_types()->attach($eventtypes);
        }


    }
}
