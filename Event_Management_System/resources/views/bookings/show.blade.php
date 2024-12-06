@extends('layouts.app')

@section('title', 'Booking Details')

@section('content')
<div class="container">
    <h1>Booking Details</h1>

    <table class="table table-bordered">
        <tr>
            <th>Event Name</th>
            <td>{{ $booking->event_name }}</td>
        </tr>
        <tr>
            <th>User Name</th>
            <td>{{ $booking->user_name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $booking->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $booking->phone }}</td>
        </tr>
        <tr>
            <th>Booking Date</th>
            <td>{{ $booking->booking_date }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $booking->status }}</td>
        </tr>
    </table>

    <a href="{{ route('bookings.index') }}" class="btn btn-primary">Back to Bookings</a>
</div>
<br>
@endsection
