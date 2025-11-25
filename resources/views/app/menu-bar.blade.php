<div class="fixed left-0 top-0 h-screen w-[70px] bg-blue-900/95 text-white flex flex-col items-center py-4 shadow-xl">

    <a href="" class="mb-6">
        <img class="w-9  bg-white cursor-pointer hover:opacity-80 transition" 
             src="{{ asset('storage/logo.png') }}" 
             alt="Nova Logo">
    </a>

    <nav class="flex flex-col items-center space-y-6 flex-1 mt-6">

        {{-- Add --}}
        <a href="" class="hover:bg-white p-2 rounded-lg transition flex flex-col items-center justify-center">
            <svg class="w-7 h-7 hover:text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2">
                <rect width="18" height="18" x="3" y="3" rx="2"/>
                <path d="M8 12h8"/>
                <path d="M12 8v8"/>
            </svg>
        </a>

        {{-- Products --}}
        <a href="" class="hover:bg-blue-700 p-2 rounded-lg transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                <line x1="3" y1="9" x2="21" y2="9"/>
                <line x1="3" y1="15" x2="21" y2="15"/>
            </svg>
        </a>

        {{-- Inventory --}}
        <a href="" class="hover:bg-blue-700 p-2 rounded-lg transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4a2 2 0 0 0 1-1.73z"/>
            </svg>
        </a>

        {{-- Report --}}
        <a href="" class="hover:bg-blue-700 p-2 rounded-lg transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 3v18h18"/>
                <path d="M18 17V9"/>
                <path d="M13 17v-6"/>
                <path d="M8 17v-3"/>
            </svg>
        </a>

    </nav>

    {{-- Settings --}}
    <a href="" class="mb-4 hover:bg-blue-700 p-2 rounded-lg transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="3"/>
            <path d="M19.4 15a1.8 1.8 0 0 0 .4 2l.3.3a2 2 0 1 1-2.8 2.8l-.3-.3a1.8 1.8 0 0 0-2-.4 1.8 1.8 0 0 0-1 1.6V22a2 2 0 1 1-4 0v-.5a1.8 1.8 0 0 0-1-1.6 1.8 1.8 0 0 0-2 .4l-.3.3a2 2 0 1 1-2.8-2.8l.3-.3a1.8 1.8 0 0 0 .4-2 1.8 1.8 0 0 0-1.6-1H2a2 2 0 1 1 0-4h.5a1.8 1.8 0 0 0 1.6-1 1.8 1.8 0 0 0-.4-2l-.3-.3a2 2 0 0 1 2.8-2.8l.3.3a1.8 1.8 0 0 0 2 .4h.1a1.8 1.8 0 0 0 1-1.6V2a2 2 0 1 1 4 0v.5a1.8 1.8 0 0 0 1 1.6 1.8 1.8 0 0 0 2-.4l.3-.3a2 2 0 0 1 2.8 2.8l-.3.3a1.8 1.8 0 0 0-.4 2 1.8 1.8 0 0 0 1.6 1H22a2 2 0 1 1 0 4h-.5a1.8 1.8 0 0 0-1.6 1z"/>
        </svg>
    </a>

</div>
