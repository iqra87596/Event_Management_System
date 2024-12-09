@extends('layouts.app')

@section('title', 'Category Details')

@section('content')
<div class="container">
    <h1><b><u>Category Details</u></b></h1>

    <table class="table table-bordered">
        <tr>
            <th>Event Name</th>
            <td>{{ $category->event_name }}</td>
        </tr>
        <hr>
        <br>
        <tr>
            <th>Event Description</th>
            <td>{{ $category->event_description }}</td>
        </tr>
    </table>

    <h3>Associated Event Bookings</h3>
    @if($category->eventBookings->isEmpty())
        <p>No event bookings found for this category.</p>
    @else
        <ul>
            @foreach($category->eventBookings as $eventBooking)
                <li>
                    <strong>{{ $eventBooking->event_name }}</strong><br>
                    <strong>Booked by:</strong> {{ $eventBooking->user_name }}<br>
                    <strong>Email:</strong> {{ $eventBooking->email }}<br>
                    <strong>Phone:</strong> {{ $eventBooking->phone }}<br>
                    <strong>Booking Date:</strong> {{ $eventBooking->booking_date }}<br>
                    <strong>Status:</strong> {{ $eventBooking->status }}<br><br>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
</div>
<br>
@endsection
