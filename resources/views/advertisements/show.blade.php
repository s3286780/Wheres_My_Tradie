@extends('layouts.app')

@section('content')

    <h1>{{$ad->name}}</h1>   
    
    <div>
        <label>Service type: {{$ad->service}}</label></br>
        <label>Description: {{$ad->body}}</label></br></br>
        
        <label>Contact Information:</label></br>
        <label>{{ Auth::user()->name }} </label></br>
        <label>Phone: {{$ad->phone}}</label></br>
        <label>Email: {{$ad->email}}</label></br>
        <label>Location: {{$ad->location}}</label></br>
        <img style="width:50%" src="/storage/images/{{$ad->image}}">

    </div>
    <small>Created on {{$ad->created_at}}</small>
    <div>
        <a href="/advertisement" class="btn btn-primary">Back</a>
        <a href="/home" class="btn btn-success">Home</a>
    </div>
@endsection