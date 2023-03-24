@extends('layouts.app')


@section('content')

<div class="container-xxl py-2">
    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
        @endforeach

        <form action=" {{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            {{-- @foreach($events as $event) --}}
            @csrf
            {{-- <div class="input-group mb-3">
                @foreach($event->event_types as $event_type)
                <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$event_type->id}}" {{(old('event_type_id') == $event_type->id) ? "selected" : ""}}>{{$event_type->name}}
                @endforeach
            </div> --}}

            <select class="form-select" aria-label="Default select example">
                @foreach($events->event_types as $event_type)
                <option selected>Open this select menu</option>
                <option value="">One</option>
                @endforeach
              </select>

            <div class="input-group mb-3">
                @foreach($events->event_type as $event_type)
                <span class="input-group-text" id="inputGroup-sizing-default">Location</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$event_type->id}}" {{(old('event_type_id') == $event_type->id) ? "selected" : ""}}>{{$event_type->location}}
                @endforeach
            </div>

            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected = "artist_id" >Open this select menu</option>
                @foreach($events as $event)
                {{-- <option value= "{{$event->artist->id}}" {{(old('artist_id') == $event->artist_id) ? "selected" : ""}}>{{$event->artist->first_name}} --}}
                    hello
                @endforeach
              </select>
              {{-- @endforeach --}}
            </form>
</div>




@endsection