@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Edit Car</h1>

    <form action="{{ route('cars.update', $car) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Car Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $car->name) }}" class="w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="model" class="block text-sm font-medium text-gray-700">Car Model</label>
            <input type="text" id="model" name="model" value="{{ old('model', $car->model) }}" class="w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="rent_per_day" class="block text-sm font-medium text-gray-700">Rent per Day</label>
            <input type="number" id="rent_per_day" name="rent_per_day" value="{{ old('rent_per_day', $car->rent_per_day) }}" class="w-full p-2 border border-gray-300 rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select id="status" name="status" class="w-full p-2 border border-gray-300 rounded-md" required>
                <option value="available" {{ $car->status == 'available' ? 'selected' : '' }}>Available</option>
                <option value="unavailable" {{ $car->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
            </select>
        </div>

        <!-- Image Section -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Car Image</label>

            <!-- Display current image -->
            @if($car->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" class="w-32 h-32 object-cover mb-2">
                    <!-- <button type="button" class="bg-red-500 text-white p-2 rounded-md" onclick="removeImage()">Remove Image</button> -->
                </div>
            @endif

            <!-- Image upload input -->
            <input type="file" name="image" class="w-full p-2 border border-gray-300 rounded-md">
        </div>

        <!-- Hidden input for removing image -->
        <input type="hidden" name="remove_image" id="remove_image" value="">

        <div class="flex justify-between">
            <a href="{{ route('cars.index') }}" class="inline-block text-gray-500">Back to Cars List</a>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded-md">Save Changes</button>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<script>
    // Remove Image functionality (will be handled in the controller)
    function removeImage() {
        if(confirm('Are you sure you want to remove the image?')) {
            // Set hidden input to '1' to indicate image removal
            document.getElementById('remove_image').value = '1';
        }
    }
</script>
@endsection
