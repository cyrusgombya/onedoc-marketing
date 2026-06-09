<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(): View
    {
        return view('pages.booking.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'company' => 'required|string|max:255',
            'service_type' => 'required|in:marketing_consultancy,marketing_training,marketing_communication,medical_consultancy,medical_training,medical_communication',
            'preferred_date' => 'required|date|after_or_equal:today',
            'preferred_time' => 'required|string',
            'message' => 'nullable|string',
        ]);

        Booking::create($validated);

        return redirect()->route('home')->with('success', 'Consultation booked successfully! We will contact you soon.');
    }
}
