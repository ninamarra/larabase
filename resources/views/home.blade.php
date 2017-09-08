@extends('layouts.material-dashboard')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="green">
                    <h4 class="title">{{ auth()->user()->name }}</h4>
                </div>
                <div class="card-content">
                    <h4 class="title">You are logged in!</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
