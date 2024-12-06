@extends('layouts.app')

@section('title', 'Create Booking')

@section('content')
<div class="container">
    <h1>Create Event Booking</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="event_name" class="form-label">Event Name</label>
            <input type="text" name="event_name" id="event_name" class="form-control" value="{{ old('event_name') }}" required>
        </div>
        <div class="mb-3">
            <label for="user_name" class="form-label">Your Name</label>
            <input type="text" name="user_name" id="user_name" class="form-control" value="{{ old('user_name') }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
        </div>
        <div class="mb-3">
            <label for="booking_date" class="form-label">Booking Date</label>
            <input type="date" name="booking_date" id="booking_date" class="form-control" value="{{ old('booking_date') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
