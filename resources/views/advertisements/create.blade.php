@extends('layouts.app')

@section('content')

<h1>Create Advertisement</h1>
    {!! Form::open(['action' => 'AdvertisementController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <!-- Business Name -->
        <div class='form-group'>
            {{Form::label('name', 'Business Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Business Name'])}}
        </div>

        <!-- Service Type -->
        <div class='form-group'>
            {{Form::label('service', 'Service Type')}}
            {{Form::text('service', '', ['class' => 'form-control', 'placeholder' => 'eg. electrical, painting, gas, etc...'])}}
        </div>

        <!-- Description -->
        <div class="form-group">
            {{Form::label('body', 'Short Description')}}
            {{Form::textarea('body', '',  ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description', 'size' => '15x1'])}}
        </div>

        <!-- Location -->
        <div class='form-group'>
            {{Form::label('location', 'Location')}}
            {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'eg. Sunbury, 3429'])}}
        </div>

        <!-- Phone Number -->
        <div class='form-group'>
            {{Form::label('phone', 'Contact Number')}}
            {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'eg. 0412345678'])}}
        </div>

        <!-- Max working disatnce -->
        <div class='form-group'>
            {{Form::label('max_dist', 'Maximum working distance (km)')}}
            {{Form::text('max_dist', '', ['class' => 'form-control', 'placeholder' => 'eg. 25'])}}
        </div>

        <!-- Image -->
        <div class="form-group">
            {{Form::file('image')}}
        </div>

        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection