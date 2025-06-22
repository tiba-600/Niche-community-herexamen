<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Country;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $countries = Country::paginate(3);
        $events = Event::paginate(3);
        return view('dashboard', compact('countries', 'events'));
    }

    public function destroy($id)
    {
        // Zoek  country of event.
        $country = Country::find($id);
        $events = Event::find($id);

        if ($country) {
            $country->delete();
            return Redirect::route('dashboard')->with('success', 'Country succesvol verwijderd!');
        }

        if ($events) {
            $events->delete();
            return Redirect::route('dashboard')->with('success', 'Event succesvol verwijderd!');
        }

        return Redirect::route('dashboard')->with('error', 'Item niet gevonden!');
    }
}

