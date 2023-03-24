@extends('layouts.app')


@section('content')

<div class="container-xxl py-2">
    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
        @endforeach

        @foreach($events as $event)
        <form action=" {{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="input-group mb-3">
                @foreach($event->event_types as $event_type)
                <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$event_type->id}}" {{(old('event_type_id') == $event_type->id) ? "selected" : ""}}>{{$event_type->name}}
                @endforeach
            </div> --}}

            

            <div class="input-group mb-3">
                @foreach($event->event_types as $event_type)
                <span class="input-group-text" id="inputGroup-sizing-default">Location</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$event_type->id}}" {{(old('event_type_id') == $event_type->id) ? "selected" : ""}}>{{$event_type->location}}
                @endforeach
            </div>

            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected = "artist_id" >Open this select menu</option>
                @foreach($event->artists as $artist)
                <option value= "{{$artist->id}}" {{(old('artist_id') == $artist_id) ? "selected" : ""}}>{{$artist->first_name}}
                @endforeach
              </select>
            </form>
            @endforeach
</div>




@endsection