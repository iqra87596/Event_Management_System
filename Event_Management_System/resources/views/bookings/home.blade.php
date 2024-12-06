@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <h1>Welcome to Event Management System</h1>
    <p>Book events seamlessly and manage your bookings with ease.</p>
    <a href="{{ route('bookings.index') }}" class="btn btn-primary">Manage Event Bookings</a>
</div>
@endsection
