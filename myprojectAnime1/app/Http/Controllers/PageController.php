<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Event;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::latest()->take(3)->get(); //  alleen de nieuwste 3
        $countries = Country::paginate(3);

        if ($request->ajax()) {
            return view('country.partials.lists', compact('countries'))->render();
        }

        return view('index', compact('countries', 'events'));
    }
}
