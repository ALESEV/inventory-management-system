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
    <header class="bg-blue-50/50 backdrop-blur-md border-b border-transparent shadow-2xl sticky top-0 z-20">
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

                    <li class="flex items-center gap-1 text-blue-700 border border-transparent rounded hover:text-white hover:bg-blue-700 hover:border-blue-700">
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
            <img class="w-full h-[500px] object-cover opacity-90" src="{{ asset('storage/warehouse_system.png') }}" alt="Warehouse picture">
        </div>
        <div class="absolute top-1/2 left-24 transform -translate-y-1/2 text-white">
            <h1 class="text-6xl font-bold">Inventory Software:</h1>
            <h3 class="text-4xl mt-2">your stock, simplified.</h3>
            <a href="{{ route('signup') }}" 
                class="inline-block mt-6 rounded border border-white text-white font-semibold px-6 py-3 bg-blue-700 hover:text-blue-700 hover:bg-[rgba(255,255,255,0.3)]">
                Sign Up Free
            </a>

        </div>
    </hero>

    <section class="py-16 bg-white">
        <div class="container mx-auto border-transparent rounded-2xl flex justify-between items-center bg-blue-50">
            <div class="w-1/2 pr-3 flex justify-center p-10">
                <img class="h-120" src="{{ asset('storage/boxes.avif') }}"> 
            </div>
            <div class="w-1/2 pl-1 flex-col p-18">
                <h2 class="text-4xl font-extrabold text-gray-800 pb-10">
                    Inventory management software with Nova Inventory
                </h2>
                <p class="text-2xl">Take control of your stock with Nova inventory software for small businesses. Instead of juggling spreadsheets and multiple tools, get one smooth system. Automatically track your items so you know when to reorder, breeze through your digital billing, and connect apps for extra tools.</p>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container mx-auto border-transparent rounded-2xl flex justify-center bg-blue-50">
            <div class="pb-13">
                <h2 class="text-3xl font-extrabold text-gray-800 pb-10">
                    How Nova's stock control software boosts your business
                </h2>
                <p class="text-2xl">Nova organizes the items you buy and sell in a single place. You have all the crucial info, none of the fuss.</p>
            </div>
            <div>
                <div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                    </div>
                </div>
                <div></div>
                <div></div>
            </div>
        </div>
    </section>



    <main>
        @yield("main")
    </main>
</body>
</html>