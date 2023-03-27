@extends('layouts.app')


@section('content')

<div class="container-xxl py-2">
    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
        @endforeach

        <form action=" {{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            {{-- @foreach($events as $event) --}}
            @csrf

            <select name="event_name_id" class="form-select" aria-label="Default select example" class="py-2 my-2">
                <option selected>Open this select menu</option>
                @foreach($event_types as $event_type)
                <option value="{{$event_type->id}}" {{(old('event_type_id') == $event_type->id) ? "selected" : ""}}>{{$event_type->event_name}}</option>
                @endforeach
              </select>
{{-- 
              <div class="input-group">
                <div class="input-group-text">
                    @foreach($event_types as $event_type)
                  <input class="form-check-input mt-0" type="radio" value="{{$event_type->id}}" {{(old('event_type_id') == $event_type->id) ? "selected" : }}>{{$event_type->name}}
                
                @endforeach
            </div> --}}
    

              {{-- <div class="input-group">
                <div class="input-group-text">
                    @foreach($event_types as $event_type)
                  <input class="form-check-input mt-0" type="radio" value="{{$event_type->id}}" {{(old('event_type_id') == $event_type->id) ? "selected" : }}>{{$event_type->name}}
                
                @endforeach
            </div> --}}

              

              {{-- <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                @foreach($events as $event)
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="{{$event->id}}" {{(old('event_id') == $event->id) ? "selected" : ""}}>{{$event->date}}
                @endforeach
              </div> --}}

            {{-- <select class="form-select" aria-label="Default select example" class="py-2 ">
                <option selected>Open this select menu</option>
                @foreach($events as $event)
                <option value="{{$event->id}}" {{(old('event_id') == $event->id) ? "selected" : ""}}>{{$event->date}}</option>
                @endforeach
              </select> --}}

              <div>
              <label for="exampleFormControlInput1" class="form-label">date</label>
  <input name="date" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Date" value=""></div>

              <div>
                <label for="exampleFormControlInput1" class="form-label">Start time</label>
    <input name="start_time" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Time" value="" ></div>

              


           

            {{-- <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected = "artist_id" >Open this select menu</option>
                @foreach($event_types as $event_type)
                <option value= "{{$event_type->id}}" {{(old('event_type_id') == $event_type->id) ? "selected" : ""}}>{{$event_type->location}}
                    
                @endforeach
              </select> --}}

            <select name="artist_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected = "artist_id" >Open this select menu</option>
                @foreach($artist as $artist)
                <option value="{{$artist->id}}" {{(old('artist_id') == $artist->id) ? "selected" : ""}}>{{$artist->first_name}}
                    
                @endforeach
              </select>

              {{-- <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected = "artist_id" >Open this select menu</option>
                @foreach($events as $event)
                <option value= "{{$event->artist->id}}" {{(old('artist_id') == $event->artist_id) ? "selected" : ""}}>{{$event->artist->last_name}}
                  
                @endforeach
              </select> --}}

              <select name="venues_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected = "artist_id" >Open this select menu</option>
                @foreach($venue as $venues)
                <option value="{{$venues->id}}" {{(old('venue_id') == $venues->id) ? "selected" : ""}}>{{$venues->name}}
                
                @endforeach
              </select>

              <button type="submit" class="btn btn-primary">Create Event</button>
            </form>
</div>




@endsection