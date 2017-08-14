@extends('layouts.app')

@section('content')

<h1>List of advertisements</h1>
@if(count($ads) > 0)
    @foreach($ads as $ad)
    <div class='well'>
        <h3><a href='/advertisement/{{$ad->id}}'>{{$ad->name}}</a></h3> 
        <samll>Created on {{$ad->created_at}}</small>
    </div>
    @endforeach
    <div class='text-center'>
    {{$ads->links()}}
    </div>
@else
    <p>Sorry! There is currently no ads at the moment. Please come back later.</P>
@endif

@endsection