@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $listing->name }} <a href="/dashboard" class="float-right btn btn-default btn-sm">Go Back</a></div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Address: {{ $listing->address }}</li>
                        <li class="list-group-item">Website: {{ $listing->website }}</li>
                        <li class="list-group-item">Email: {{ $listing->email }}</li>
                        <li class="list-group-item">Phone: {{ $listing->phone }}</li>
                    </ul>

                    <div class="card card-body bg-light">
                        {{ $listing->bio }}
                    </div>
                </div>
            </div> 
        </div>
    </div>
@endsection