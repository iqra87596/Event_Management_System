<?php

namespace App\Http\Controllers;

use App\Models\EventBooking;
use Illuminate\Http\Request;

class EventBookingController extends Controller
{
    public function index()
    {
        $bookings = EventBooking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        return view('bookings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'user_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'booking_date' => 'required|date',
        ]);

        EventBooking::create($validated);

        return redirect()->route('bookings.index')->with('success', 'Booking created successfully!');
    }

    public function edit(EventBooking $booking)
    {
        return view('bookings.edit', compact('booking'));
    }

    public function update(Request $request, EventBooking $booking)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'user_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'booking_date' => 'required|date',
        ]);

        $booking->update($validated);

        return redirect()->route('bookings.index')->with('success', 'Booking updated successfully!');
    }

    public function destroy(EventBooking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully!');
    }

    public function show(EventBooking $booking)
    {
        return view('bookings.show', compact('booking'));
    }
}