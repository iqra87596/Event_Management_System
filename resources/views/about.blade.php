@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">About EventMaster</h2>
    <p>EventMaster is your go-to platform for booking tickets to all types of events, from concerts to sports games to theater shows. Our mission is to make ticket booking easy and accessible for everyone.</p>
</div>
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EventMaster - Event Booking Platform</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @include('partials.header')

    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
