@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container my-5">
    <!-- Image with overlay text -->
    <div class="custom-image-container">
        <img src="{{ asset('images/L2.jpg') }}" alt="Welcome Image" class="img-fluid custom-image">
        <div class="overlay-text">
            <b><i>WELCOME TO THE EVENT MANAGEMENT SYSTEM</i></b>
            <br>
            <a class="btn btn-primary btn-lg" href="{{ route('products') }}" role="button">Explore Events</a>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center mb-4">Events List</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        
   <!-- New Year's Eve Party -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/new_year.jpg') }}" class="card-img-top" alt="New Year's Eve Party">
            <div class="card-body">
                <h5 class="card-title">New Year's Eve Party</h5>
                <p class="card-text">Celebrate the New Year with an exclusive party atmosphere. <br> Price: Rs. 20,000</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Birthday Party -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/birthday.jpg') }}" class="card-img-top" alt="Birthday Party">
            <div class="card-body">
                <h5 class="card-title">Birthday Party</h5>
                <p class="card-text">Enjoy a fantastic birthday celebration. <br> Price: Rs. 2,000</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Midnight Feast -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/midnight_feast.jpg') }}" class="card-img-top" alt="Midnight Feast">
            <div class="card-body">
                <h5 class="card-title">Midnight Feast</h5>
                <p class="card-text">Late-night feasting with gourmet delights. <br> Price: Rs. 1,400</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Friendsgiving -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/friendsgiving.jpg') }}" class="card-img-top" alt="Friendsgiving">
            <div class="card-body">
                <h5 class="card-title">Friendsgiving</h5>
                <p class="card-text">A cozy, seasonal celebration. <br> Price: Rs. 1,500</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Wedding Reception -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/reception.jpg') }}" class="card-img-top" alt="Wedding Reception">
            <div class="card-body">
                <h5 class="card-title">Wedding Reception</h5>
                <p class="card-text">Elegant and memorable receptions. <br> Price: Rs. 600</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Beach Party -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/beach_party.jpg') }}" class="card-img-top" alt="Beach Party">
            <div class="card-body">
                <h5 class="card-title">Beach Party</h5>
                <p class="card-text">Fun under the sun with a beach setup. <br> Price: Rs. 600</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Tea Party -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/tea_party.jpg') }}" class="card-img-top" alt="Tea Party">
            <div class="card-body">
                <h5 class="card-title">Tea Party</h5>
                <p class="card-text">A charming tea gathering. <br> Price: Rs. 600</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Bachelor Party -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/bachelor_party.jpg') }}" class="card-img-top" alt="Bachelor Party">
            <div class="card-body">
                <h5 class="card-title">Bachelor Party</h5>
                <p class="card-text">Unforgettable bachelor experiences. <br> Price: Rs. 500</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Musical Night -->
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/musical_night.jpg') }}" class="card-img-top" alt="Musical Night">
            <div class="card-body">
                <h5 class="card-title">Musical Night</h5>
                <p class="card-text">Enjoy an evening filled with live music. <br> Price: Rs. 500</p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>

</div>

    </div>
</div>
@endsection
