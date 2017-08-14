@extends('layouts.app')

@section('content')
        <div class='jumbotron text-center'>
        <h1>Where's My Tradie!</h1>
        <p>Welcome to Where's My Tradie</p>
        <p>Please Login or Register.</p>
        <p>
                <a class = 'btn btn-primary btn-lg' href = '/login' role = 'button'   >Login</a>
                <a class = 'btn btn-success btn-lg' href = '/register' role = 'button'>Register</a>
        </p> 
        </div>
@endsection