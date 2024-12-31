<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EventBooking;
use Illuminate\Http\Request;

class EventBookingApiController extends Controller
{
    public function index()
    {
        return response()->json(EventBooking::with('category')->get());
    }

    public function show(EventBooking $booking)
    {
        return response()->json($booking->load('category'));
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

        $booking = EventBooking::create($validated);
        return response()->json($booking, 201);
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
        return response()->json($booking);
    }

    public function destroy(EventBooking $booking)
    {
        $booking->delete();
        return response()->json(null, 204);
    }
}
