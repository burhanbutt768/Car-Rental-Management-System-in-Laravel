@extends('layouts.customer')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Contact Us</h1>

        <p class="mb-4">If you have any questions, need assistance, or have inquiries about our car rental services, feel free to reach out to us using the contact information below:</p>

        <div class="mb-4">
            <h3 class="font-semibold text-lg">Our Office:</h3>
            <p>123 Car Rental St, Car City, CA 12345</p>
        </div>

        <div class="mb-4">
            <h3 class="font-semibold text-lg">Phone:</h3>
            <p>+1 (555) 123-4567</p>
        </div>

        <div class="mb-4">
            <h3 class="font-semibold text-lg">Email:</h3>
            <p>contact@carrentalsystem.com</p>
        </div>

        <div class="mb-4">
            <h3 class="font-semibold text-lg">Business Hours:</h3>
            <p>Monday to Friday: 9:00 AM - 6:00 PM</p>
            <p>Saturday: 10:00 AM - 4:00 PM</p>
            <p>Sunday: Closed</p>
        </div>

        <div>
            <h3 class="font-semibold text-lg">Follow Us:</h3>
            <p>Stay updated on our latest offers and promotions by following us on our social media channels:</p>
            <ul class="list-none flex space-x-4">
                <li>
                    <a href="https://facebook.com/carrentalsystem" target="_blank" class="text-blue-600">Facebook</a>
                </li>
                <li>
                    <a href="https://twitter.com/carrentalsystem" target="_blank" class="text-blue-400">Twitter</a>
                </li>
                <li>
                    <a href="https://instagram.com/carrentalsystem" target="_blank" class="text-purple-600">Instagram</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
