<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use App\Models\Booking;
use App\Models\Contact;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(): View
    {
        $totalProjects = PortfolioItem::count();
        $pendingBookings = Booking::pending()->count();
        $unreadMessages = Contact::unread()->count();
        $recentBookings = Booking::latest()->take(5)->get();
        $recentMessages = Contact::latest()->take(5)->get();

        return view('admin.dashboard', [
            'totalProjects' => $totalProjects,
            'pendingBookings' => $pendingBookings,
            'unreadMessages' => $unreadMessages,
            'recentBookings' => $recentBookings,
            'recentMessages' => $recentMessages,
        ]);
    }

    public function index(): View
    {
        $portfolio = PortfolioItem::paginate(10);
        return view('admin.portfolio.index', ['portfolio' => $portfolio]);
    }

    public function create(): View
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:marketing,medical,branding',
            'description' => 'required|string',
            'challenge' => 'required|string',
            'solution' => 'required|string',
            'results' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('portfolio', 'public');
            $validated['image_url'] = $path;
        }

        PortfolioItem::create($validated);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item created successfully!');
    }

    public function edit($id): View
    {
        $item = PortfolioItem::findOrFail($id);
        return view('admin.portfolio.edit', ['item' => $item]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $item = PortfolioItem::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:marketing,medical,branding',
            'description' => 'required|string',
            'challenge' => 'required|string',
            'solution' => 'required|string',
            'results' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('image')) {
            if ($item->image_url) {
                Storage::disk('public')->delete($item->image_url);
            }
            $path = $request->file('image')->store('portfolio', 'public');
            $validated['image_url'] = $path;
        }

        $item->update($validated);

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item updated successfully!');
    }

    public function destroy($id): RedirectResponse
    {
        $item = PortfolioItem::findOrFail($id);
        if ($item->image_url) {
            Storage::disk('public')->delete($item->image_url);
        }
        $item->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio item deleted successfully!');
    }

    public function bookings(): View
    {
        $bookings = Booking::paginate(10);
        return view('admin.bookings.index', ['bookings' => $bookings]);
    }

    public function updateBooking(Request $request, $id): RedirectResponse
    {
        $booking = Booking::findOrFail($id);
        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
        ]);
        $booking->update($validated);

        return back()->with('success', 'Booking status updated!');
    }

    public function messages(): View
    {
        $messages = Contact::paginate(10);
        return view('admin.messages.index', ['messages' => $messages]);
    }

    public function updateMessage(Request $request, $id): RedirectResponse
    {
        $message = Contact::findOrFail($id);
        $message->update(['is_read' => true]);

        return back()->with('success', 'Message marked as read!');
    }

    public function destroyMessage($id): RedirectResponse
    {
        Contact::findOrFail($id)->delete();
        return back()->with('success', 'Message deleted!');
    }
}
