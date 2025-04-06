@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6"> 
    <h1 class="text-2xl font-bold mb-6">Bookings Management</h1>

    <!-- Current Bookings Section -->
    <div class="mb-8">
        <h2 class="text-xl font-semibold mb-4">Current Bookings</h2>
        <div class="bg-white p-4 rounded-lg shadow">
            @if($currentBookings->isEmpty())
                <p class="text-gray-500">No current bookings.</p>
            @else
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 p-2">Customer</th>
                            <th class="border border-gray-300 p-2">Car</th>
                            <th class="border border-gray-300 p-2">Start Date</th>
                            <th class="border border-gray-300 p-2">End Date</th>
                            <th class="border border-gray-300 p-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($currentBookings as $booking)
                            <tr class="border border-gray-300">
                                <td class="p-2">{{ $booking->name }}</td>
                                <td class="p-2">{{ $booking->car->name }} ({{ $booking->car->model }})</td>
                                <td class="p-2">{{ \Carbon\Carbon::parse($booking->start_date)->format('M d, Y') }}</td>
                                <td class="p-2">{{ \Carbon\Carbon::parse($booking->end_date)->format('M d, Y') }}</td>
                                <td class="p-2">
                                    <!-- Delete Booking Form -->
                                    <form action="{{ route('admin.bookings.destroy', $booking) }}" method="POST" onsubmit="return confirmDelete()">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

    <!-- Previous Bookings Section -->
    <div>
        <h2 class="text-xl font-semibold mb-4">Previous Bookings</h2>
        <div class="bg-white p-4 rounded-lg shadow">
            @if($previousBookings->isEmpty())
                <p class="text-gray-500">No previous bookings.</p>
            @else
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 p-2">Customer</th>
                            <th class="border border-gray-300 p-2">Car</th>
                            <th class="border border-gray-300 p-2">Start Date</th>
                            <th class="border border-gray-300 p-2">End Date</th>
                            <th class="border border-gray-300 p-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($previousBookings as $booking)
                            <tr class="border border-gray-300">
                                <td class="p-2">{{ $booking->name }}</td>
                                <td class="p-2">{{ $booking->car->name }} ({{ $booking->car->model }})</td>
                                <td class="p-2">{{ \Carbon\Carbon::parse($booking->start_date)->format('M d, Y') }}</td>
                                <td class="p-2">{{ \Carbon\Carbon::parse($booking->end_date)->format('M d, Y') }}</td>
                                <td class="p-2">
                                    <!-- Delete Booking Form -->
                                    <form action="{{ route('admin.bookings.destroy', $booking) }}" method="POST" onsubmit="return confirmDelete()">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this booking?');
    }
</script>
@endsection
