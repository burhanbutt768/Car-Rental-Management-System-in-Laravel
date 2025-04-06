@extends('layouts.customer')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Rent {{ $car->name }} ({{ $car->model }})</h1>

    @if(session('error'))
        <p class="text-red-500">{{ session('error') }}</p>
    @endif

    <form action="{{ route('rent.store', $car) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" required class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" required class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" required class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <!-- <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Start Date</label>
            <input type="date" name="start_date" required class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">End Date</label>
            <input type="date" name="end_date" required class="w-full p-2 border border-gray-300 rounded-md">
        </div> -->
        <div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Start Date</label>
    <input type="date" name="start_date" required 
           class="w-full p-2 border border-gray-300 rounded-md"
           min="{{ \Carbon\Carbon::now()->toDateString() }}">
</div>

<div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">End Date</label>
    <input type="date" name="end_date" required 
           class="w-full p-2 border border-gray-300 rounded-md"
           min="{{ \Carbon\Carbon::now()->toDateString() }}">
</div>


        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
            Confirm Booking
        </button>
    </form>
</div>
@endsection
