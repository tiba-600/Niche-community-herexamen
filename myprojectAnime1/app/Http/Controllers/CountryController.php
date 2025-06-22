<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Country;

class CountryController extends Controller
{
    public function index(Request $request) {

        {
            $countries = Country::paginate(1); 
        

            if ($request->ajax()) {
                return view('country.partials.list', compact('countries'))->render();
            }
        
            return view('country.list', compact('countries'));
        }
    
    }


    public function search(Request $request) {
        
          $search = $request->input('search');
    $days = $request->input('days');

    $query = Country::query();

    if ($search) {
        $query->where('name', 'like', '%' . $search . '%');
    }

    if ($days) {
        $query->where('days', $days);
    }

    $countries  = $query->paginate(1); 

    return view('country/index', [
        'countries' => $countries,
        'search' => $search,
        'days' => $days,
    ]);
    }


    public function detail($id) {
        $country = Country::findOrFail($id);

        return view('country.detail', [
            'country' => $country
            
        ]);
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view('country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          // Validatie van input
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'intro' => 'required|string',
        'activations' => 'required|string',
        'days' => 'required|integer|min:1',
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    // Afbeelding opslaan indien geüpload
    if ($request->hasFile('img')) {
        $imagePath = $request->file('img')->store('images/countries', 'public');
        $validated['img'] = $imagePath; // Sla het pad op in de 'img' kolom
    }

    // Maak het land aan met alle gevalideerde data
    Country::create($validated);

    // Redirect met succesbericht
    return redirect()->route('dashboard')->with('success', 'Land succesvol aangemaakt.');
    }

     public function edit(string $id)
    {
        $country = Country::findOrFail($id);
        return view('country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'intro' => 'required|string',
            'activations' => 'required|string',
            'days' => 'required|integer|min:1',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $country = Country::findOrFail($id);

        //  tekstvelden
        $country->name = $validated['name'];
        $country->description = $validated['description'];
        $country->intro = $validated['intro'];
        $country->activations = $validated['activations'];
        $country->days = $validated['days'];

        //  nieuwe afbeelding is geüpload
        if ($request->hasFile('img')) {
            // Oude afbeelding verwijderen als die bestaat
            if ($country->img && Storage::disk('public')->exists($country->img)) {
                Storage::disk('public')->delete($country->img);
            }

            // Nieuwe afbeelding opslaan
            $imagePath = $request->file('img')->store('images/countries', 'public');
            $country->img = $imagePath;
        }

        $country->save();

        return redirect()->route('dashboard')->with('success', 'Country is succesvol bijgewerkt.');
    }
}





