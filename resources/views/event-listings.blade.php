@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Upcoming Events</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('images/event1.jpg') }}" class="card-img-top" alt="Music Concert">
                <div class="card-body">
                    <h5 class="card-title">Music Concert</h5>
                    <p class="card-text">Experience a live music concert with top artists.</p>
                    <a href="#" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        <!-- Repeat event cards as needed -->
    </div>
</div>
@endsection
