@extends('layouts.app')
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Create Listings</a></h2>
<br>








{{ Form::open(array('action' => array('ListingsController@store')))}}

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name</strong>
            <input type="text" name="name" class="form-control" placeholder="Company Name">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Website</strong>
            <input type="text" name="website" class="form-control" placeholder="Company Website">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Email</strong>
            <input type="email" name="email" class="form-control" placeholder="Company email">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Phone</strong>
            <input type="text" name="phone" class="form-control" placeholder="Company phone no">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Address</strong>
            <input type="text" name="address" class="form-control" placeholder="Company address">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Bio</strong>
            <input type="text" name="bio" class="form-control" placeholder="Company bio">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

{{ Form::close() }}
@endsection



