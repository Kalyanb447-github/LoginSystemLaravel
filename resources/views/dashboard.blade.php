@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center">Dashboard</h3>

                    <span class="panel-heading text-center">
                        <a href="/listings/create" class="btn btn-success btn-xs pull-right">Add Listing</a>
                    </span>
                </div>
                <br><br>
                <div class="panel-body">
                    <h3>Your Listings</h3>
                    @if(count($listings)>0)
                      <table class="table table-striped">
                        <tr>
                          <th>Company</th>
                          <th>address</th>
                          <th>website</th>
                          <th>email</th>
                          <th>phone</th>
                          <th>bio</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        @foreach($listings as $listing)
                          <tr>
                            <td>{{$listing->name}}</td>
                            <td>{{$listing->address}}</td>
                            <td>{{$listing->website}}</td>
                            <td>{{$listing->email}}</td>
                            <td>{{$listing->phone}}</td>
                            <td>{{$listing->bio}}</td>
                            <td><a class="pull-right btn btn-outline-primary" href="/listings/{{$listing->id}}/edit">Edit</a></td>

                            <td>{{ Form::open(array('action' => array('ListingsController@destroy',$listing->id)))}}
                                <button type="submit" class="btn btn-danger">Delete</button>

                                {{Form::hidden('_method', 'Delete')}}
                                {{ Form::close() }}
                            </td>

                          </tr>
                        @endforeach
                      </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


