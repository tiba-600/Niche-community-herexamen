<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoeken naar Producten</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-red-50 text-gray-800">

    @include('layouts.header')

    <main class="min-h-screen flex items-center justify-center">
        <section class="w-full max-w-2xl mt-12 mb-12">
            
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold">Search Your Favorite Country</h1>
            </div>

            <form 
                action="{{ route('products.search') }}" 
                method="GET" 
                class="bg-white shadow-md rounded-xl p-6 space-y-4"
            >
                <div class="flex gap-4 flex-col sm:flex-row">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Search for a country..." 
                        value="{{ request('search') }}" 
                        class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300"
                    />

                    <select name="days" id="" class="px-4 py-2 border border-gray-300 rounded-lg">
                        <option value="">-- Filter op dagen --</option>
                        <option value="1" {{request('days') == 1 ? 'selected' : '' }}>1 day</option>
                        <option value="1" {{request('days') == 5 ? 'selected' : '' }}>5 day</option>
                        <option value="1" {{request('days') == 10 ? 'selected' : '' }}>10 day</option>
                        <option value="1" {{request('days') == 15 ? 'selected' : '' }}>15 day</option>
                        <option value="1" {{request('days') == 20 ? 'selected' : '' }}>20 day</option>
                        <option value="1" {{request('days') == 25 ? 'selected' : '' }}>25 day</option>
                    </select>

                </div>

                <div class="text-right">
                    <button 
                        type="submit" 
                        class="bg-red-500 hover:bg-red-400 text-white font-semibold px-6 py-2 rounded-lg focus:ring-2 focus:ring-red-200 focus:outline-none"
                    >
                        Zoeken
                    </button>
                </div>
            </form>

            @if (!empty($search) && $products->count() > 0)
                <ul class="mt-8 bg-white shadow-md rounded-xl p-6 space-y-4">
                    @foreach ($products as $product)
                        <li class="border-b pb-4 last:border-b-0 flex gap-4">
                            <div class="text-red-400 pt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold">{{ $product->name }}</h3>
                                <p class="text-sm text-gray-600">Groepen: {{ $product->groups }}</p>
                                <p class="text-sm text-gray-600">Prijs: €{{ $product->price }}</p>
                                <p class="text-sm text-gray-600">Activaties: {{ $product->activations }}</p>
                                <p class="text-sm text-gray-600">Dag: {{ $product->day }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                @include('components.country-found')
            @endif

            @if (!empty($search))
                <div class="mt-6">
                    {{ $products->appends(['search' => $search])->links() }}
                </div>
            @endif
        </section>
    </main>

    @include('layouts.footer')
</body>
</html> -->
