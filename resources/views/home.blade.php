@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    
                    <h3>Your ads</h3>
                    <a href='/advertisement/create' class='btn btn-primary'>Create</a>
                    @if(count($ads) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                
                            </tr>
                            @foreach($ads as $ad)
                                <tr>
                                    <td>{{$ad->name}}</td>
                                    <td>
                                                                        
                                        {!!Form::open(['action' => ['AdvertisementController@destroy', $ad->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        <a href='/advertisement/{{$ad->id}}' class='btn btn-success'>View</a>
                                        <a href='/advertisement/{{$ad->id}}/edit' class='btn btn-warning'>Edit</a>   
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                            
                        </table>
                    @else
                        <p>You have no ads</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
