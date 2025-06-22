@foreach ($countries as $country)
<div class="flex justify-center items-center">
    <div class="border border-gray-300 rounded-lg p-4 max-w-lg bg-white relative">
        <div class="flex">
            <div class="w-1/2 flex justify-center items-center">
                <img src="{{ asset('storage/' . $country->img) }}" alt="{{ $country->name }}" class="w-full h-full object-cover rounded-lg">
            </div>
            <div class="w-1/2 pl-4 flex flex-col justify-between">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">{{ $country->name }}</h2>
                    <p class="text-gray-600 mt-2">{{ $country->intro }}</p>
                </div>
                <a href="/countries/{{ $country->id }}/detail" class="mt-4 bg-red-200 text-white text-center py-2 px-4 rounded hover:bg-red-300">
                    More
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach



