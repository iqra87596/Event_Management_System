@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Header Section -->
<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-12 px-0 position-relative">
        <img src="{{ asset('images/L2.jpg') }}" alt="Description of image" class="img-fluid custom-image" />
        <div class="overlay-text">
            <h1><b><i>WELCOME TO THE EVENT MANAGEMENT SYSTEM</i></b></h1>
        </div>
    </div>
</div>

<!-- Event List Header -->
<h1 class="display-4 fst-italic text-center menu-header">
    <i><b><u>EVENT LIST</u></b></i>
</h1>

<!-- Search and Filters Section -->
<div class="row mb-4">
    <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Search for Events...">
    </div> 

    <div class="col-md-3">
        <select class="form-control">
            <option value="">Event Category</option>
            <option value="New Year's Eve Party">New Year's Eve Party</option>
            <option value="Birthday Party">Birthday Party</option>
            <option value="Midnight Feast">Midnight Feast</option>
            <option value="Friendsgiving">Friendsgiving</option>
            <option value="Wedding Reception">Wedding Reception</option>
            <option value="Beach Party">Beach Party</option>
            <option value="Tea Party">Tea Party</option>
            <option value="Bachelor Party">Bachelor Party</option>
            <option value="Musical Night">Musical Night</option>
            <option value="Diwali Delight">Diwali Delight</option>
            <option value="Christmas Cheer">Christmas Cheer</option>
        </select>
    </div>
     
    <div class="col-md-3">
        <select class="form-control">
            <option value="">Location</option>
            <option value="London">United Kingdom</option>
            <option value="Tokyo">Japan</option>
            <option value="Berlin">Germany</option>
            <option value="Moscow">Russia</option>
            <option value="Sydney">Australia</option>
            <option value="Mumbai">India</option>
            <option value="Cairo">Egypt</option>
            <option value="Rio de Janeiro">Brazil</option>
            <option value="Cape Town">South Africa</option>
            <option value="Seoul">South Korea</option>
        </select>
    </div>
</div>

<!-- Event Cards Section -->
<div class="container my-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ([
            ['title' => "New Year's Eve Party", 'price' => 'Rs. 20,000', 'image' => 'new_year.jpg', 'desc' => 'Celebrate the New Year with an exclusive party atmosphere.'],
            ['title' => 'Birthday Party', 'price' => 'Rs. 2,000', 'image' => 'birthday.jpg', 'desc' => 'Enjoy a fantastic birthday celebration.'],
            ['title' => 'Midnight Feast', 'price' => 'Rs. 1,400', 'image' => 'midnight_feast.jpg', 'desc' => 'Late-night feasting with gourmet delights.'],
            ['title' => 'Friendsgiving', 'price' => 'Rs. 1,500', 'image' => 'friendsgiving.jpg', 'desc' => 'A cozy, seasonal celebration.'],
            ['title' => 'Wedding Reception', 'price' => 'Rs. 600', 'image' => 'reception.jpg', 'desc' => 'Elegant and memorable receptions.'],
            ['title' => 'Beach Party', 'price' => 'Rs. 600', 'image' => 'beach_party.jpg', 'desc' => 'Fun under the sun with a beach setup.'],
            ['title' => 'Tea Party', 'price' => 'Rs. 600', 'image' => 'tea_party.jpg', 'desc' => 'A charming tea gathering.'],
            ['title' => 'Bachelor Party', 'price' => 'Rs. 500', 'image' => 'bachelor_party.jpg', 'desc' => 'Unforgettable bachelor experiences.'],
            ['title' => 'Musical Night', 'price' => 'Rs. 500', 'image' => 'musical_night.jpg', 'desc' => 'Enjoy an evening filled with live music.'],
            ['title' => 'Diwali Delight', 'price' => 'Rs. 900', 'image' => 'Diwali Delight.jpg', 'desc' => 'Enjoy an evening filled with live Diwali.'],
            ['title' => 'Christmas Cheer', 'price' => 'Rs. 800', 'image' => 'Christmas Cheer.jpg', 'desc' => 'Enjoy an filled with live Christmas Cheer.'],
            ['title' => 'Spring Bloom Festival', 'price' => 'Rs. 2000', 'image' => 'Spring Bloom Festival.jpg', 'desc' => 'Enjoy Spring Bloom Festival.'],
        ] as $event)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/' . $event['image']) }}" class="card-img-top" alt="{{ $event['title'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $event['title'] }}</h5>
                    <p class="card-text">{{ $event['desc'] }} <br> Price: {{ $event['price'] }}</p>
                    <button class="btn btn-primary">Add to Cart</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Navigation Links -->
<div class="container mt-5">
    <a href="{{ route('bookings.index') }}" class="btn btn-primary">Manage Event Bookings</a>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Manage Categories</a>
</div>
<br>
@endsection
