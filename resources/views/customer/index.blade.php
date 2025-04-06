
<!--<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Available Cars for Rent</h1>

    <div class="grid grid-cols-3 gap-6">
        @foreach($cars as $car)
            <div class="bg-white p-4 shadow-lg rounded-lg">
          
                @if($car->image)
                    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" 
                         class="w-full h-40 object-cover rounded-md mb-3">
                @else
                    <img src="{{ asset('images/default-car.jpg') }}" alt="Default Car" 
                         class="w-full h-40 object-cover rounded-md mb-3">
                @endif

                <h2 class="text-xl font-semibold">{{ $car->name }} ({{ $car->model }})</h2>
                <p>Rent per Day: <strong>${{ $car->rent_per_day }}</strong></p>

                @if($car->status == 'rented')
                    <p class="mt-2 text-red-500 font-semibold">Rented</p>
                    <button disabled class="mt-2 inline-block bg-gray-500 text-white px-4 py-2 rounded cursor-not-allowed">
                        Rent This Car
                    </button>
                @else
                    <a href="{{ route('rent.create', $car) }}" 
                       class="mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded">
                        Rent This Car
                    </a>
                @endif
            </div>
        @endforeach
    </div>
</div> -->
@extends('layouts.customer')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Available Cars for Rent</h1>

    <div class="grid grid-cols-3 gap-6">
        @foreach($cars as $car)
            <div class="bg-white p-4 shadow-lg rounded-lg">
                <!-- Display Car Image -->
                @if($car->image)
                    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" 
                         class="w-full h-40 object-cover rounded-md mb-3 cursor-pointer" 
                         onclick="openModal('{{ asset('storage/' . $car->image) }}')">
                @else
                    <img src="{{ asset('images/default-car.jpg') }}" alt="Default Car" 
                         class="w-full h-40 object-cover rounded-md mb-3 cursor-pointer" 
                         onclick="openModal('{{ asset('images/default-car.jpg') }}')">
                @endif

                <h2 class="text-xl font-semibold">{{ $car->name }} ({{ $car->model }})</h2>
                <p>Rent per Day: <strong>${{ $car->rent_per_day }}</strong></p>

                <!-- Show rented tag if the car is unavailable -->
                @if($car->status == 'rented')
                    <p class="mt-2 text-red-500 font-semibold">Rented</p>
                    <button disabled class="mt-2 inline-block bg-gray-500 text-white px-4 py-2 rounded cursor-not-allowed">
                        Rent This Car
                    </button>
                @else
                    <a href="{{ route('rent.create', $car) }}" 
                       class="mt-2 inline-block bg-blue-500 text-white px-4 py-2 rounded">
                        Rent This Car
                    </a>
                @endif
            </div>
        @endforeach
    </div>
</div>

<!-- Modal Structure -->
<div id="imageModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-75 flex justify-center items-center">
    <div class="relative max-w-3xl w-full">
        <span class="absolute top-2 right-2 text-black text-3xl cursor-pointer" onclick="closeModal()">&times;</span>
        <img id="modalImage" src="" class="w-full h-auto rounded-md">
    </div>
</div>

<script>
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
    }
</script>
@endsection


