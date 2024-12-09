@extends('layouts.app')

@section('title', 'Edit Booking')

@section('content')
<div class="container">
    <h1><i><b><u>Edit Booking</u></b></i></h1>

    <form action="{{ route('bookings.update', $booking) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="event_name" class="form-label">Event Name</label>
            <input type="text" name="event_name" id="event_name" class="form-control" value="{{ $booking->event_name }}" required>
        </div>
        <div class="mb-3">
            <label for="user_name" class="form-label">Your Name</label>
            <input type="text" name="user_name" id="user_name" class="form-control" value="{{ $booking->user_name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $booking->email }}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $booking->phone }}" required>
        </div>
        <div class="mb-3">
            <label for="booking_date" class="form-label">Booking Date</label>
            <input type="date" name="booking_date" id="booking_date" class="form-control" value="{{ $booking->booking_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

