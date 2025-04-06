<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Rental;

class RentalController extends Controller
{
    // Show available cars
    public function index()
{
    $today = Carbon::today();

    // Automatically update cars whose rental period has ended
    Rental::where('end_date', '<', $today)->get()->each(function ($rental) {
        $car = Car::find($rental->car_id);
        if ($car && $car->status === 'rented') {
            $car->status = 'available';
            $car->save();
        }
    });

    $cars = Car::all();
    return view('customer.index', compact('cars'));
}

    
    // Show rent form
    public function create(Car $car)
    {
        return view('customer.rent', compact('car'));
    }

    // Store booking
    public function store(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
    
        // Calculate the number of days rented
        $startDate = Carbon::parse($validatedData['start_date']);
        $endDate = Carbon::parse($validatedData['end_date']);
        $daysRented = $startDate->diffInDays($endDate);
    
        // Create a new rental
        $rental = Rental::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'car_id' => $car->id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'days_rented' => $daysRented,
        ]);
    
        // Change the car status to 'unavailable' after the rental
        $car->status = 'rented';
        $car->save();
    
        return redirect()->route('customer.bill', $rental);
    }
    
public function showBill(Rental $rental)
{
    // Calculate the number of days rented
    $startDate = Carbon::parse($rental->start_date);
    $endDate = Carbon::parse($rental->end_date);
    $daysRented = $startDate->diffInDays($endDate);

    // Calculate total bill by multiplying rent per day with the days rented
    $totalBill = $rental->car->rent_per_day * $daysRented;

    // Pass the data to the view
    return view('customer.bill', compact('rental', 'totalBill', 'daysRented'));
}
}
