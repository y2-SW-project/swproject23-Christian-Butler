@extends('layouts.app')


@section('content')

<div class="container-xxl py-2">
    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
        @endforeach

        <form action=" {{ route('events.store') }}" method="PUT" enctype="multipart/form-data">
        
            @csrf

            <select name="event_name_id" class="form-select" aria-label="Default select example" class="py-2 my-2">
                <option selected>Open this select menu</option>
                @foreach($event_types as $event_type)
                <option value="{{$event_type->id}}" {{(old('event_type_id') == $event_type->id) ? "selected" : ""}}>{{$event_type->event_name}}</option>
                @endforeach
              </select>

              {{-- <div>
              <label for="exampleFormControlInput1" class="form-label">date</label>
  <input name="date" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Date" value="{{old('date',$events->date)}}"></div> --}}

              <div>
                <label for="exampleFormControlInput1" class="form-label">Start time</label>
    <input name="start_time" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Time" value="" ></div>

           


            <select name="artist_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected = "artist_id" >Open this select menu</option>
                @foreach($artist as $artist)
                <option value="{{$artist->id}}" {{(old('artist_id') == $artist->id) ? "selected" : ""}}>{{$artist->first_name}}
                    
                @endforeach
              </select>

             

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