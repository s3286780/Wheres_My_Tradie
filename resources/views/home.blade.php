@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    @if (Auth::user()->account == '0')
                        <a href="" class="btn btn-success">New Search</a>
                        <h3>Your Searches</h3>

                    @elseif (Auth::user()->account == '1')
                        <a href="/advertisement/create" class="btn btn-success">Create Ad</a>
                        <h3>Your Ads</h3>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
