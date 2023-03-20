@extends('layouts.app')


@section('content')

<div class="container-xxl py-2">
    @foreach ($errors->all() as $error)
    <p>{{$error}}</p>
        @endforeach

        <form action=" {{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                @foreach($event->$event_types as $event_type)
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$event_type->id}}" {{(old('event_type_id') == $event_type->id) ? "selected" : ""}}>{{$event_type->event_name}}
                @endforeach
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Location</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Location</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        
        
        
        </form>




</div>




@endsection