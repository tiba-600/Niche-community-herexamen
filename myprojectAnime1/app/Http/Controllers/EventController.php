<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::paginate(6);
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        if ($request->hasFile('img')) {
            $validated['img'] = $request->file('img')->store('images/events', 'public');
        }

        Event::create($validated);

        return redirect()->route('dashboard')->with('success', 'Event succesvol aangemaakt.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        $event = Event::findOrFail($id);

        if ($request->hasFile('img')) {
            // Verwijder oude afbeelding
            if ($event->img && Storage::disk('public')->exists($event->img)) {
                Storage::disk('public')->delete($event->img);
            }

            // Sla nieuwe afbeelding 
            $validated['img'] = $request->file('img')->store('images/events', 'public');
        }

        $event->update($validated);

        return redirect()->route('dashboard')->with('success', 'Event succesvol bijgewerkt.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);

        // Verwijder afbeelding
        if ($event->img && Storage::disk('public')->exists($event->img)) {
            Storage::disk('public')->delete($event->img);
        }

        $event->delete();

        return redirect()->route('dashboard')->with('success', 'Event succesvol verwijderd.');
    }
}
