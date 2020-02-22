@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-success btn-sm">Add Listings</a></span></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Your Listings</h1>
                    @if(count($listings)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{ $listing->name }}</td>
                                    <td><a class="float-right btn btn-default" href="/listings/{{ $listing->id }}/edit">Edit</a></td>
                                    <td>
                                    {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST','class'=>'float-left','onsubmit'=>'return confirm("Are you sure?")']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::bsSubmit('Delete', ['class'=>'btn btn-danger']) }}
                                    {!! Form::close() !!}
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
