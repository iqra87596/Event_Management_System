@extends('layouts.app')

@section('title', 'Event Details')

@section('content')
<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-12 px-0 position-relative">
        <img src="{{ asset('images/L2.jpg') }}" alt="Description of image" class="img-fluid custom-image" />
        <div class="overlay-text">
            <h1><b><i><u>WELCOME TO THE EVENT MANAGEMENT SYSTEM</u></i></b></h1>
        </div>
    </div>
</div>

<h1 class="display-4 fst-italic text-center menu-header">
    <i><b><u>EVENT DETAILS</u></b></i>
</h1>

<div class="container my-5">
    
   
    <!-- New Year's Eve Party -->
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1"><b><i>New Year’s Eve Extravaganza by Elevate Events</i></b></h2>
            <p class="lead"><b><u>About:</u></b> Elevate Events, based in New York City, transforms venues into magical spaces for the ultimate NYE celebrations.</p>
            <p><b><u>Highlights:</u></b> Countdown, DJ performances, interactive light shows, and themes like "Gatsby Glam" and "Midnight Mystique."</p>
            <p><b><u>Unique Touch:</u></b> VIP sections, exclusive afterparties, and glamorous decor with a dramatic touch.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="{{ asset('images/new_year.jpg') }}" class="featurette-image img-fluid mx-auto" alt="New Year's Eve Extravaganza" width="400" height="400">
        </div>
    </div>

    <!-- Birthday Party -->
    <div class="row featurette">
        <div class="col-md-7 order-md-1">
            <h2 class="featurette-heading fw-normal lh-1"><b><i>Birthday Bash by Radiant Celebrations</i></b></h2>
            <p class="lead"><b><u>About:</u></b> Los Angeles-based Radiant Celebrations crafts high-energy, themed birthday parties with style.</p>
            <p><b><u>Highlights:</u></b> Themed milestone celebrations with custom favors, photo walls, and interactive games.</p>
            <p><b><u>Unique Touch:</u></b> Celebrity-style themes like “Hollywood Nights” or “Boho Chic” make these celebrations unforgettable.</p>
        </div>
        <div class="col-md-5 order-md-2">
            <img src="{{ asset('images/birthday.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Birthday Bash" width="400" height="400">
        </div>
    </div>

    <!-- Midnight Feast -->
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1"><b><i>Midnight Feast by NightOwl Events</i></b></h2>
            <p class="lead"><b><u>About:</u></b> NightOwl Events in London offers unique, intimate late-night gatherings with gourmet food.</p>
            <p><b><u>Highlights:</u></b> Midnight feasts featuring soft lighting, cozy blankets, and themed culinary stations.</p>
            <p><b><u>Unique Touch:</u></b> “Gourmet Midnight” packages with snack bars, hot chocolate stations, and movie marathons.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="{{ asset('images/midnight_feast.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Midnight Feast" width="400" height="400">
        </div>
    </div>

    <!-- Friendsgiving -->
    <div class="row featurette">
        <div class="col-md-7 order-md-1">
            <h2 class="featurette-heading fw-normal lh-1"><b><i>Friendsgiving Fest by Harvest Gatherings</i></b></h2>
            <p class="lead"><b><u>About:</u></b> Harvest Gatherings in Portland creates seasonal events with a cozy, rustic ambiance.</p>
            <p><b><u>Highlights:</u></b> Family-style dining, warm autumn decor, candlelit tables, and personalized place settings.</p>
            <p><b><u>Unique Touch:</u></b> Seasonal-themed decor and interactive games create a close, festive atmosphere.</p>
        </div>
        <div class="col-md-5 order-md-2">
            <img src="{{ asset('images/friendsgiving.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Friendsgiving Fest" width="400" height="400">
        </div>
    </div>

    <!-- Wedding Reception -->
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1"><b><i>Wedding Reception by Love & Luxe Events</i></b></h2>
            <p class="lead"><b><u>About:</u></b> Paris-based Love & Luxe Events creates luxurious, romantic wedding receptions with elegance.</p>
            <p><b><u>Highlights:</u></b> Exquisite floral arrangements, gourmet dining, and tailored decor for a memorable experience.</p>
            <p><b><u>Unique Touch:</u></b> Candlelit settings, seasonal florals, and ambient lighting add to the romantic atmosphere.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="{{ asset('images/reception.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Wedding Reception" width="400" height="400">
        </div>
    </div>

    <!-- Beach Party -->
    <div class="row featurette">
        <div class="col-md-7 order-md-1">
            <h2 class="featurette-heading fw-normal lh-1"><b><i>Beach Party by SunKissed Events</i></b></h2>
            <p class="lead"><b><u>About:</u></b> SunKissed Events specializes in vibrant beach parties with tropical vibes.</p>
            <p><b><u>Highlights:</u></b> Tiki bars, live music, fire dancers, and fresh coastal decor.</p>
            <p><b><u>Unique Touch:</u></b> Coastal-inspired decor and beach games add a festive, tropical touch.</p>
        </div>
        <div class="col-md-5 order-md-2">
            <img src="{{ asset('images/beach_party.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Beach Party" width="400" height="400">
        </div>
    </div>

    <!-- Tea Party -->
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1"><b><i>Tea Party by Enchanting Tea Events</i></b></h2>
            <p class="lead"><b><u>About:</u></b> Enchanting Tea Events hosts beautiful, vintage-style tea parties in San Francisco.</p>
            <p><b><u>Highlights:</u></b> Floral arrangements, fine china, delectable treats, and an elegant, vintage atmosphere.</p>
            <p><b><u>Unique Touch:</u></b> Vintage tea ware and fresh floral decor create an intimate, classic setting.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="{{ asset('images/tea_party.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Tea Party" width="400" height="400">
        </div>
    </div>

    <!-- Bachelor Party -->
    <div class="row featurette">
        <div class="col-md-7 order-md-1">
            <h2 class="featurette-heading fw-normal lh-1"><b><i>Bachelor Party by Stag & Co</i></b></h2>
            <p class="lead"><b><u>About:</u></b> Stag & Co in Las Vegas designs high-energy bachelor parties filled with thrilling activities.</p>
            <p><b><u>Highlights:</u></b> Exclusive club access, private tours, sports, and entertainment.</p>
            <p><b><u>Unique Touch:</u></b> Customizable experiences, VIP access, and themed party favors.</p>
        </div>
        <div class="col-md-5 order-md-2">
            <img src="{{ asset('images/bachelor_party.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Bachelor Party" width="400" height="400">
        </div>
    </div>

    <!-- Musical Night -->
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading fw-normal lh-1"><b><i>Musical Night by SoundWave Productions</i></b></h2>
            <p class="lead"><b><u>About:</u></b> SoundWave Productions creates vibrant musical events that entertain and engage.</p>
            <p><b><u>Highlights:</u></b> Multi-genre bands, DJs, food trucks, and interactive installations.</p>
            <p><b><u>Unique Touch:</u></b> Themed stages, “Silent Disco” events, and colorful fireworks displays.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img src="{{ asset('images/musical_night.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Musical Night" width="400" height="400">
        </div>
    </div>
</div>
 <!-- Diwali Delight -->
 <div class="row featurette">
    <div class="col-md-7 order-md-1">
        <h2 class="featurette-heading fw-normal lh-1"><b><i>Diwali Delight </i></b></h2>
        <p class="lead"><b><u>About:</u></b> Stag & Co in Las Vegas designs high-energy Diwali Delight parties filled with thrilling activities.</p>
        <p><b><u>Highlights:</u></b> Exclusive club access, private tours, sports, and entertainment.</p>
        <p><b><u>Unique Touch:</u></b> Customizable experiences, VIP access, and themed party favors.</p>
        <p><b><u>Highlights:</u></b> Exclusive club access, private tours, sports, and entertainment.</p>
        <p><b><u>Unique Touch:</u></b> Customizable experiences, VIP access, and themed party favors.</p>
        <p><b><u>Highlights:</u></b> Exclusive club access, private tours, sports, and entertainment.</p>
    </div>
    <div class="col-md-5 order-md-2">
        <img src="{{ asset('images/Diwali Delight.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Diwali Delight" width="400" height="400">
    </div>
</div>
<!-- Christmas Cheer -->
<div class="row featurette">
    <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1"><b><i>Christmas Cheer by SoundWave Productions</i></b></h2>
        <p class="lead"><b><u>About:</u></b> SoundWave Productions creates vibrant Christmas Cheer that entertain and engage.</p>
        <p><b><u>Highlights:</u></b> Multi-genre bands, DJs, food trucks, and interactive installations.</p>
        <p><b><u>Unique Touch:</u></b> Themed stages, “Silent Disco” events, and colorful fireworks displays.</p>
        <p><b><u>Highlights:</u></b> Exclusive club access, private tours, sports, and entertainment.</p>
        <p><b><u>Unique Touch:</u></b> Customizable experiences, VIP access, and themed party favors.</p>
        <p><b><u>Highlights:</u></b> Exclusive club access, private tours, sports, and entertainment.</p>
    </div>
    <div class="col-md-5 order-md-1">
        <img src="{{ asset('images/Christmas Cheer.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Christmas Cheer" width="400" height="400">
    </div>
</div>
<!-- Spring Bloom Festival -->
<div class="row featurette">
    <div class="col-md-7 order-md-1">
        <h2 class="featurette-heading fw-normal lh-1"><b><i>Spring Bloom Festival </i></b></h2>
        <p class="lead"><b><u>About:</u></b> Stag & Co in Las Vegas designs high-energy Spring Bloom Festival parties filled with thrilling activities.</p>
        <p><b><u>Highlights:</u></b> Exclusive club access, private tours, sports, and entertainment.</p>
        <p><b><u>Unique Touch:</u></b> Customizable experiences, VIP access, and themed party favors.</p>
        <p><b><u>Highlights:</u></b> Exclusive club access, private tours, sports, and entertainment.</p>
        <p><b><u>Unique Touch:</u></b> Customizable experiences, VIP access, and themed party favors.</p>
        <p><b><u>Highlights:</u></b> Exclusive club access, private tours, sports, and entertainment.</p>
    </div>
    <div class="col-md-5 order-md-2">
        <img src="{{ asset('images/Spring Bloom Festival.jpg') }}" class="featurette-image img-fluid mx-auto" alt="Spring Bloom Festival" width="400" height="400">
    </div>
</div>
</div>


@endsection
