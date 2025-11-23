<header 
    x-data="{ open: false }"
    class="bg-blue-50/50 backdrop-blur-md border-b border-transparent shadow-2xl sticky top-0 z-20"
>
    <div class="container mx-auto flex flex-wrap justify-between items-center py-5">

        <a class="flex items-center gap-2" href="{{ route('home') }}">
            <img class="w-10" src="{{ asset('storage/logo.png') }}" alt="Logo Nova Inventory">
            <h1 class="text-blue-700 font-semibold hover:text-black">Nova Inventory</h1>                
        </a>

        <button 
            class="lg:hidden text-blue-700 focus:outline-none"
            @click="open = !open"
        >
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <nav class="hidden lg:block">
            <ul class="flex items-center gap-6">

                <li class="flex items-center gap-1 hover:text-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"/>
                    </svg>
                    <a href="{{ route('about') }}">About</a>
                </li>

                <li class="flex items-center gap-1 hover:text-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 lucide lucide-contact-round" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M16 2v2"/><path d="M17.915 22a6 6 0 0 0-12 0"/><path d="M8 2v2"/>
                        <circle cx="12" cy="12" r="4"/><rect x="3" y="4" width="18" height="18" rx="2"/>
                    </svg>
                    <a href="{{ route('contacts') }}">Contacts</a>
                </li>

                <li class="flex items-center gap-1 hover:text-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 lucide lucide-log-in" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="m10 17 5-5-5-5"/><path d="M15 12H3"/><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                    </svg>
                    <a href="{{ route('login') }}">Login</a>
                </li>

                <li class="flex items-center gap-1 text-blue-700 border border-transparent rounded hover:text-white hover:bg-blue-700 hover:border-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 4v16m8-8H4" />
                    </svg>
                    <a href="{{ route('signup') }}">Sign Up</a>
                </li>

            </ul>
        </nav>
    </div>

    <nav 
        x-show="open"
        class="lg:hidden bg-blue-50/80 backdrop-blur-md shadow-inner"
    >
        <ul class="flex flex-col gap-4 py-5 px-6 text-lg">

            <li class="flex items-center gap-2 hover:text-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"/>
                </svg>
                <a href="{{ route('about') }}">About</a>
            </li>

            <li class="flex items-center gap-2 hover:text-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 lucide lucide-contact-round" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M16 2v2"/><path d="M17.915 22a6 6 0 0 0-12 0"/><path d="M8 2v2"/>
                    <circle cx="12" cy="12" r="4"/><rect x="3" y="4" width="18" height="18" rx="2"/>
                </svg>
                <a href="{{ route('contacts') }}">Contacts</a>
            </li>

            <li class="flex items-center gap-2 hover:text-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 lucide lucide-log-in" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m10 17 5-5-5-5"/><path d="M15 12H3"/><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                </svg>
                <a href="{{ route('login') }}">Login</a>
            </li>

            <li class="flex items-center gap-2 text-blue-700 border rounded py-2 px-2 hover:text-white hover:bg-blue-700 hover:border-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 4v16m8-8H4" />
                </svg>
                <a href="{{ route('signup') }}">Sign Up</a>
            </li>

        </ul>
    </nav>
</header>
