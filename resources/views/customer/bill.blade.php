@extends('layouts.customer')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-8 text-center text-gray-700">Rental Bill</h1>

    <div class="bg-white p-8 rounded-lg shadow-lg border border-gray-200">
        <h2 class="text-2xl font-semibold mb-6 text-gray-600">Car Rental Summary</h2>

        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gradient-to-r from-green-100 to-green-200">
                    <th class="border border-gray-300 px-6 py-3 text-left text-gray-700 font-semibold">Detail</th>
                    <th class="border border-gray-300 px-6 py-3 text-left text-gray-700 font-semibold">Information</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-green-50">
                    <td class="border border-gray-300 px-6 py-4 font-semibold text-gray-600">Car Name</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-700">{{ $rental->car->name }} ({{ $rental->car->model }})</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="border border-gray-300 px-6 py-4 font-semibold text-gray-600">Rent per Day</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-700">${{ $rental->car->rent_per_day }}</td>
                </tr>
                <tr class="bg-gray-50 hover:bg-green-50">
                    <td class="border border-gray-300 px-6 py-4 font-semibold text-gray-600">Customer Name</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-700">{{ $rental->name }}</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="border border-gray-300 px-6 py-4 font-semibold text-gray-600">Email</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-700">{{ $rental->email }}</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="border border-gray-300 px-6 py-4 font-semibold text-gray-600">Phone</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-700">{{ $rental->phone }}</td>
                </tr>
                <tr class="bg-gray-50 hover:bg-green-50">
                    <td class="border border-gray-300 px-6 py-4 font-semibold text-gray-600">Start Date</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-700">{{ \Carbon\Carbon::parse($rental->start_date)->format('M d, Y') }}</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="border border-gray-300 px-6 py-4 font-semibold text-gray-600">End Date</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-700">{{ \Carbon\Carbon::parse($rental->end_date)->format('M d, Y') }}</td>
                </tr>
                <tr class="hover:bg-green-50">
                    <td class="border border-gray-300 px-6 py-4 font-semibold text-gray-600">Days Rented</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-700">{{ $daysRented }} days</td>
                </tr>
                <tr class="bg-gray-50 hover:bg-green-50">
                    <td class="border border-gray-300 px-6 py-4 font-semibold text-gray-600">Total Rent</td>
                    <td class="border border-gray-300 px-6 py-4 text-gray-700 font-bold">${{ $totalBill }}</td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-8">
            <a href="{{ route('home') }}" class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded shadow-md transition duration-200">
                Back to Home
            </a>
        </div>
    </div>
</div>
@endsection
