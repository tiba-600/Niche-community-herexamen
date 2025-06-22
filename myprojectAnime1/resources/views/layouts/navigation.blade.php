<nav x-data="{ open: false }" class="bg-red-200 border-b border-gray-200 shadow-md ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Left: Logo & Navigation -->
            <div class="flex items-center space-x-8">
                <!-- Logo -->
                 
                    <a href="{{ route('dashboard') }}" class="block w-auto text-pink-600">
                        DreamQuest
                    </a>
                 

                <!-- Navigation Links -->
                <ul class="hidden sm:flex space-x-6 text-sm font-medium text-gray-700">
                    <li><a href="/" class="hover:text-pink-600 transition">Home</a></li>
                    <li><a href="/countries" class="hover:text-pink-600 transition">Search</a></li>
                    <li><a href="/contact" class="hover:text-pink-600 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Right: User Dropdown -->
            <div class="hidden sm:flex sm:items-center space-x-4">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-700 hover:text-pink-600 transition">
                                {{ Auth::user()->name }}
                                <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Log Out
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-pink-600">Login</a>
                    <a href="{{ route('register') }}" class="text-sm text-gray-700 hover:text-pink-600">Register</a>
                @endguest
            </div>

            <!-- Hamburger -->
            <div class="sm:hidden flex items-center">
                <button @click="open = ! open" class="p-2 rounded-md text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden bg-white border-t border-gray-200">
        <div class="px-4 pt-4 pb-2 space-y-2">
            <a href="/" class="block text-sm text-gray-700 hover:text-pink-600">Home</a>
            <a href="/countries" class="block text-sm text-gray-700 hover:text-pink-600">Search</a>
            <a href="/contact" class="block text-sm text-gray-700 hover:text-pink-600">Contact</a>

            @auth
                <a href="{{ route('profile.edit') }}" class="block text-sm text-gray-700 hover:text-pink-600">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="block text-sm text-gray-700 hover:text-pink-600 w-full text-left">Log Out</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('login') }}" class="block text-sm text-gray-700 hover:text-pink-600">Login</a>
                <a href="{{ route('register') }}" class="block text-sm text-gray-700 hover:text-pink-600">Register</a>
            @endguest
        </div>
    </div>
</nav>
