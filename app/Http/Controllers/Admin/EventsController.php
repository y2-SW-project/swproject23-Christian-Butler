<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use App\Models\Artist;
use App\Models\Events;
use App\Models\EventTypes;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user= Auth::user();
        $user->authorizeRoles('admin');

        $events = Events::all();
        // dd($events);
        return view('admin.events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');


        $venue=Venue::all();
        $artist = Artist::all();
        $event_types=EventTypes::all();
        $events = Events::all();
        return view('admin.events.create')->with('events', $events)->with('event_types', $event_types)->with("venue", $venue)->with('artist',$artist);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $user = Auth::user();
        $user->authorizeRoles('admin');

        
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


        return to_route('admin.events.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Events $event)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $venue=Venue::all();
        $artist = Artist::all();
        // $event_types=EventTypes::all();
       // $events = Events::all();
    //    dd($event->event_types);
        return view('admin.events.show')->with('event', $event)->with("venue", $venue)->with('artist',$artist);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events)


    {
        // $events = Events::where('id', $id)->get();

        $user = Auth::user();
        $user->authorizeRoles('admin');

        $venue=Venue::all();
        $artist = Artist::all();
        $event_types=EventTypes::all();
        $events = Events::all();
        return view('admin.events.edit')->with('events', $events)->with('event_types', $event_types)->with("venue", $venue)->with('artist',$artist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Events $events): RedirectResponse
    {

        $user = Auth::user();
        $user->authorizeRoles('admin');


        $events = new Events;

        $events->date = $request->date;
        $events->start_time = $request->start_time;
        $events->venues_id = $request->venues_id;
        $events->artist_id = $request->artist_id;

        $events->save();

        //add entry to pivot table
        $events->event_types()->attach($request->event_name_id);


        return to_route('admin.events.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');


        $events->delete();

        return to_route('admin.events.index');
    }
}
