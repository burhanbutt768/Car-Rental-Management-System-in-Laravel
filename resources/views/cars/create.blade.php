@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Add a New Car</h1>
    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Car Name</label>
            <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded-md" value="{{ old('name') }}" required>
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-4">
            <label for="model" class="block text-gray-700">Car Model</label>
            <input type="text" name="model" id="model" class="w-full p-2 border border-gray-300 rounded-md" value="{{ old('model') }}" required>
            @error('model') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-4">
            <label for="rent_per_day" class="block text-gray-700">Rent per Day</label>
            <input type="number" name="rent_per_day" id="rent_per_day" class="w-full p-2 border border-gray-300 rounded-md" value="{{ old('rent_per_day') }}" required>
            @error('rent_per_day') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-4">
            <label for="status" class="block text-gray-700">Status</label>
            <select name="status" id="status" class="w-full p-2 border border-gray-300 rounded-md" required>
                <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
                <option value="rented" {{ old('status') == 'rented' ? 'selected' : '' }}>Rented</option>
            </select>
            @error('status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <div class="mb-4">
            <label for="image" class="block text-gray-700">Car Image</label>
            <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded-md">
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md">Add Car</button>
    </form>
</div>
@endsection
