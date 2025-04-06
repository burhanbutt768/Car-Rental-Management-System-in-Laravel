<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rental;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AdminBookingController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        // Get current bookings (end date has not passed)
        $currentBookings = Rental::where('end_date', '>=', $today)->orderBy('start_date', 'desc')->get();

        // Get previous bookings (end date has passed)
        $previousBookings = Rental::where('end_date', '<', $today)->orderBy('end_date', 'desc')->get();

        return view('admin.bookings', compact('currentBookings', 'previousBookings'));
    }

    public function destroy($id)
    {
        // Find the booking by ID
        $booking = Rental::find($id);

        // Check if booking exists
        if (!$booking) {
            return redirect()->route('admin.bookings')->with('error', 'Booking not found.');
        }

        try {
            $booking->delete();
            Session::flash('success', 'Booking deleted successfully.');
        } catch (\Exception $e) {
            Session::flash('error', 'An error occurred while deleting the booking.');
        }

        return redirect()->route('admin.bookings');
    }
}