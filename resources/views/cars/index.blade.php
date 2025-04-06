@extends('layouts.app')  

@section('content') 
<div class="bg-white p-6 rounded-lg shadow-lg">     
    <h1 class="text-2xl font-bold mb-4">All Cars</h1>      

    <a href="{{ route('cars.create') }}" class="mb-4 inline-block bg-blue-500 text-white p-2 rounded-md">Add New Car</a>      

    <table class="w-full table-auto">         
        <thead>             
            <tr>                 
                <th class="p-2 border-b">Image</th>                 
                <th class="p-2 border-b">Name</th>                 
                <th class="p-2 border-b">Model</th>                 
                <th class="p-2 border-b">Rent per Day</th>                 
                <th class="p-2 border-b">Status</th>                 
                <th class="p-2 border-b">Actions</th>             
            </tr>         
        </thead>         
        <tbody>             
            @foreach($cars as $car)             
            <tr>                 
                <td class="p-2 border-b">                     
                    @if($car->image)                         
                        <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" class="w-16 h-16 object-cover rounded cursor-pointer" onclick="openModal('{{ asset('storage/' . $car->image) }}')">                     
                    @else                         
                        <span>No Image</span>                     
                    @endif                 
                </td>                 
                <td class="p-2 border-b">{{ $car->name }}</td>                 
                <td class="p-2 border-b">{{ $car->model }}</td>                 
                <td class="p-2 border-b">{{ $car->rent_per_day }}</td>                 
                <td class="p-2 border-b">{{ $car->status }}</td>                 
                <td class="p-2 border-b">                     
                    <a href="{{ route('cars.edit', $car) }}" class="bg-yellow-500 text-white p-2 rounded-md">Edit</a>                     
                    <form action="{{ route('cars.destroy', $car) }}" method="POST" class="inline-block" onsubmit="return confirmDelete()">                         
                        @csrf                         
                        @method('DELETE')                         
                        <button type="submit" class="bg-red-500 text-white p-2 rounded-md">Delete</button>                     
                    </form>                 
                </td>             
            </tr>             
            @endforeach         
        </tbody>     
    </table> 
</div>  

<!-- Modal --> 
<div id="imageModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">     
    <div class="bg-white p-4 rounded-lg relative">         
        <!-- Close Button (Cross) -->         
        <span class="absolute top-2 right-2 text-3xl cursor-pointer text-gray-700" onclick="closeModal()">×</span>         
        <img id="modalImage" src="" alt="Car Image" class="w-96 h-96 object-cover">     
    </div> 
</div>  

@endsection   

<script>     
    // Open modal with image     
    function openModal(imageUrl) {         
        const modal = document.getElementById('imageModal');         
        const modalImage = document.getElementById('modalImage');         
        modalImage.src = imageUrl;         
        modal.classList.remove('hidden');         
        modal.classList.add('flex');     
    }      

    // Close modal     
    function closeModal() {         
        const modal = document.getElementById('imageModal');          
        modal.classList.add('hidden');         
        modal.classList.remove('flex');     
    }      

    // Confirmation before delete     
    function confirmDelete() {         
        return confirm('Are you sure you want to delete this car?');     
    }
</script>
