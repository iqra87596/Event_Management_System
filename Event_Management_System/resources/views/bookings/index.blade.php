@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div class="col">
    <div class="card h-100 shadow-sm">
        <div class="card-body">
            <!-- "Have an Event Booking?" Section -->  
<div class="container text-center">
<h1 class="display-4 fst-italic text-center menu-header">
    <i><b><u>Have an Event Booking?</u></b></i>
</h1>

<p>Click below to book your event and connect with the best management system!</p>

<!-- Add Event Button -->
<div class="row justify-content-center mb-3">
    <div class="col-md-4">
        <a href="{{ route('products') }}" class="btn btn-primary btn-lg w-100">
            Add Event
        </a>
    </div>
</div>

<!-- View Event Button -->
<div class="row justify-content-center">
    <div class="col-md-4">
        <a href="{{ route('contact') }}" class="btn btn-success btn-lg w-100">
            View Event
        </a>
    </div>
</div>
<br>
<!--  Book Event Button -->
<div class="row justify-content-center mb-3">
    <div class="col-md-4">
        <a href="{{ route('products') }}" class="btn btn-primary btn-lg w-100">
             Book Event
        </a>
    </div>
</div>

<!-- Delete Event Button -->
<div class="row justify-content-center">
    <div class="col-md-4">
        <a href="{{ route('contact') }}" class="btn btn-success btn-lg w-100">
           Delete  Event
        </a>
    </div>
</div>


</div>
        </div>
    </div>
</div>
<br>
    
<div class="container text-center">
    <h1 class="display-4 fst-italic text-center menu-header">
        <i><b><u>Event Bookings</u></b></i>
    </h1>

    <a href="{{ route('bookings.create') }}" class="btn btn-success mb-3">Add New Booking</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Event Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Booking Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bookings as $booking)
                <tr>
                    <td>{{ $booking->event_name }}</td>
                    <td>{{ $booking->user_name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <a href="{{ route('bookings.show', $booking) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('bookings.edit', $booking) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('bookings.destroy', $booking) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No bookings found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

