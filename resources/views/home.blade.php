@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    <h3>Your Blog Posts</h3>
                    @if(count($ads) > 0)
                    <p>You have ads</p>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($ads as $ad)
                                <tr>
                                    <td>{{$ad->name}}</td>
                                    <td><a href="/advertisements/{{$ad->id}}/edit" class="btn btn-default">Edit</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
