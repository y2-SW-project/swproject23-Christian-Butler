<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use App\Models\Artist;
use App\Models\Events;
use App\Models\EventTypes;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $events = Events::all();
        // dd($events);
        return view('events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $venue=Venue::all();
        $artist = Artist::all();
        $event_types=EventTypes::all();
        $events = Events::all();
        return view('events.create')->with('events', $events)->with('event_types', $event_types)->with("venue", $venue)->with('artist',$artist);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       // dd($request);
        $request->validate([
            'date'=> 'required',
            'start_time' => 'required',
            'venues_id'=>'required',
            'artist_id' => 'required'
             
        ]);

        $events = new Events;

        $events->date = $request->date;
        $events->start_time = $request->start_time;
        $events->venues_id = $request->venues_id;
        $events->artist_id = $request->artist_id;

        $events->save();

        //add entry to pivot table
        $events->event_types()->attach($request->event_name_id);


        return to_route('events.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Events $event)
    {
        $venue=Venue::all();
        $artist = Artist::all();
        // $event_types=EventTypes::all();
       // $events = Events::all();
    //    dd($event->event_types);
        return view('events.show')->with('event', $event)->with("venue", $venue)->with('artist',$artist);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events)


    {
        // $events = Events::where('id', $id)->get();

        $venue=Venue::all();
        $artist = Artist::all();
        $event_types=EventTypes::all();
        $events = Events::all();
        return view('events.edit')->with('events', $events)->with('event_types', $event_types)->with("venue", $venue)->with('artist',$artist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $events = new Events;

        $events->date = $request->date;
        $events->start_time = $request->start_time;
        $events->venues_id = $request->venues_id;
        $events->artist_id = $request->artist_id;

        $events->save();

        //add entry to pivot table
        $events->event_types()->attach($request->event_name_id);


        return to_route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events)
    {
        $events->delete();

        return to_route('events.index');
    }
}
