<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(): View
    {
        return view('pages.contact.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'service_type' => 'nullable|string',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return redirect()->route('contact.create')->with('success', 'Thank you for your message! We will get back to you soon.');
    }
}
