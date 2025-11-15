<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Inventory - Inventory Management System</title>

    <link rel="icon" type="image/png" href="{{ asset('storage/logo.png') }}">

    @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-white border-b border-gray-300 shadow-lg relative z-20">
        <div class="container mx-auto flex justify-between items-center py-5">
            
            <a class="flex items-center" href="{{ route('home') }}">
                <img class="w-10" src="{{ asset('storage/logo.png') }}" alt="Logo Nova Inventory">
                <h1 class="text-blue-700 font-semibold hover:text-black">Nova Inventory</h1>                
            </a>

            <nav>
                <ul class="flex items-center gap-6">
                    <li class="flex items-center gap-1  hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
                        </svg>
                        <a href="{{ route('about') }}">About</a>
                    </li>

                    <li class="flex items-center gap-1  hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lucide lucide-contact-round" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 2v2"/>
                            <path d="M17.915 22a6 6 0 0 0-12 0"/>
                            <path d="M8 2v2"/>
                            <circle cx="12" cy="12" r="4"/>
                            <rect x="3" y="4" width="18" height="18" rx="2"/>
                        </svg>
                        <a href="{{ route('contacts') }}">Contacts</a>
                    </li>

                    <li class="flex items-center gap-1 hover:text-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 lucide lucide-log-in" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m10 17 5-5-5-5"/>
                            <path d="M15 12H3"/>
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                        </svg>
                        <a href="{{ route('login') }}">Login</a>
                    </li>

                    <li class="flex items-center gap-1 text-blue-700 hover:text-white hover:bg-blue-700 hover:border hover:rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        <a href="{{ route('signup') }}">Sign Up</a>
                    </li>
                </ul>
            </nav>
        </div>

    </header>

    <hero class="relative">
        <div class="h-[500px] overflow-hidden w-full">
            <img class="w-full h-[500px] object-cover opacity-80" src="{{ asset('storage/warehouse_system.png') }}" alt="Warehouse picture">
        </div>
        <div class="absolute top-1/2 left-8 transform -translate-y-1/2 text-white">
            <h1 class="text-6xl font-bold">Inventory Software:</h1>
            <h3 class="text-4xl mt-2">your stock, simplified.</h3>
            <a href="{{ route('signup') }}" class="inline-block mt-6 bg-white bg-opacity-30 rounded border border-transparent text-blue-700 font-semibold px-6 py-3 hover:bg-blue-700 hover:bg-opacity-50 hover:text-white">Sign Up Free</a>
        </div>
    </hero>



    <main>
        @yield("main")
    </main>
</body>
</html>