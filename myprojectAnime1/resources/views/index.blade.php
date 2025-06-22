
@extends('layouts.app')

@section('content')

<style>
.loading {
    text-align: center;
    padding: 1rem;
    color: gray;
}
</style>

    <div class="flex flex-col items-center justify-center">
        <div class="text-center" style="margin-top: 5rem;">
            <div class="text-xl font-bold">Welcome</div>
            <div class="text-lg text-gray-600 mt-2">
                To DreamQuest, where unforgettable adventures begin! <br>
                Explore amazing destinations, discover unique experiences, and create lasting memories. <br>
                Your dream vacation is just a click away!
            </div>
        </div>
   <div class="mt-12 w-full max-w-7xl px-4">
    <h2 class="text-2xl font-bold text-center mb-8">Upcoming Events</h2>

    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
    @foreach($events as $event)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:scale-[1.03]">
            {{-- Event image --}}
            <img 
                src="{{ asset('storage/' . $event->img) }}" 
                alt="{{ $event->name }}" 
                class="w-full h-52 object-cover"
            >

            {{-- Content --}}
            <div class="p-5 flex flex-col space-y-3">
                {{-- Title --}}
                <h3 class="text-xl font-bold text-gray-800 truncate">{{ $event->name }}</h3>

                {{-- Short description --}}
                <p class="text-gray-600 text-sm leading-relaxed">
                    {{ Str::limit($event->description, 100) }}
                </p>

                {{-- Meta info --}}
                <div class="text-sm text-gray-500 space-y-1">
                    <p><span class="font-medium">📅 Datum:</span> {{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</p>
                    <p><span class="font-medium">📍 Locatie:</span> {{ $event->location }}</p>
                </div>

                {{-- Call to action --}}
                <a href="{{ route('events.show', $event->id) }}" 
                   class="mt-3 inline-block text-center bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded-md transition-colors duration-200">
                    More info
                </a>
            </div>
        </div>
    @endforeach
</div>

</div>


        <div class="img">
            <img src="{{ asset('images/icon3.jpg') }}" alt="Logo" class="w-38 h-38">
        </div>
    </div>

    <div class="countries-list" id="countries-list">
        <div class="contry">
            @include('country.partials.lists', ['countries' => $countries])
        </div>
    </div>

    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div id="countries-list" class="countries-list overflow-y-auto max-h-[600px]">

   <script>
    let page = 1;
    let loading = false;

    function loadMoreCountries() {
        if (loading) return;

        loading = true;
        page++;

        $('#countries-list').append('<div class="loading text-center my-4">Loading...</div>');

        $.ajax({
            url: "{{ route('countries.index') }}?page=" + page,
            type: 'GET',
            success: function (response) {
                $('.loading').remove();
                if (response.trim() !== '') {
                    $('.contry').append(response);
                    loading = false;
                } else {
                    $(window).off('scroll');
                }
            },
            error: function () {
                $('.loading').remove();
                console.error("Fout bij laden");
                loading = false;
            }
        });
    }

    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() + 100 >= $(document).height()) {
            loadMoreCountries();
        }
    });
</script>


@endsection


