@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-12 px-0 position-relative">
        <img src="{{ asset('images/L2.jpg') }}" alt="Description of image" class="img-fluid custom-image" />
        <div class="overlay-text">
            <h1><b><i>WELCOME TO THE EVENT MANAGEMENT SYSTEM</i></b></h1>
        </div>
    </div>
</div>
<h1 class="display-4 fst-italic text-center menu-header">
    <i><b><u>EVENT LIST</u></b></i>
</h1>

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


<div class="container my-5">
    
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

