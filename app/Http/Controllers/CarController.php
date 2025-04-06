<?php
namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    // Show all cars
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    // Show form to create a car
    public function create()
    {
        return view('cars.create');
    }

    // Store a new car
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'rent_per_day' => 'required|numeric',
            'status' => 'required|in:available,rented',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $carData = $request->only(['name', 'model', 'rent_per_day', 'status']);

        if ($request->hasFile('image')) {
            $carData['image'] = $request->file('image')->store('cars_images', 'public');
        }

        Car::create($carData);

        return redirect()->route('cars.index')->with('success', 'Car added successfully!');
    }

    // Show form to edit a car
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    } 

    public function update(Request $request, Car $car)
{
    // Validate the incoming request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'model' => 'required|string|max:255',
        'rent_per_day' => 'required|numeric',
        'status' => 'required|string|in:available,unavailable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
    ]);

    // Update car information
    $car->name = $validatedData['name'];
    $car->model = $validatedData['model'];
    $car->rent_per_day = $validatedData['rent_per_day'];
    $car->status = $validatedData['status'];

    // Handle image replacement or removal
    if ($request->hasFile('image')) {
        // Delete old image if it exists
        if ($car->image) {
            Storage::delete('public/' . $car->image);
        }
        // Store new image
        $imagePath = $request->file('image')->store('cars', 'public');
        $car->image = $imagePath;
    } elseif ($request->remove_image == '1') {
        // Remove image if requested
        if ($car->image) {
            Storage::delete('public/' . $car->image);
            $car->image = null;
        }
    }

    // Save the car data
    $car->save();

    return redirect()->route('cars.index')->with('success', 'Car updated successfully');
}



    // Delete a car
    public function destroy(Car $car)
    {
        if ($car->image) {
            Storage::disk('public')->delete($car->image);
        }

        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Car deleted successfully!');
    }
}
