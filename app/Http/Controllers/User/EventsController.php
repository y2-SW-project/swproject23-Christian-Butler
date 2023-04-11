<?php

namespace App\Http\Controllers\User;

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
        $user->authorizeRoles('user');
        

        $events = Events::all();
        // dd($events);
        return view('user.events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       
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
        return view('user.events.show')->with('event', $event)->with("venue", $venue)->with('artist',$artist);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events)


    {
        // $events = Events::where('id', $id)->get();

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Events $events): RedirectResponse
    {
       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events)
    {
        
    }
}
