@if(!empty($search) && $countries->count() == 0)
    <div class="bg-red-200 shadow-md rounded-lg p-6 text-center text-gray-600">
        No Country found
    </div>
@endif
