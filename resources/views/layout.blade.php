<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Inventory - Inventory Management System</title>

    <link rel="icon" type="image/png" href="{{ asset('storage/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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

    <div x-data 
        x-init="
            new Swiper($refs.heroSwiper, {
                loop: true,
                effect: 'fade',
                fadeEffect: { crossFade: true },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false
                },
                pagination: {
                    el: $refs.pagination,
                    clickable: true
                }
            });
        "
        class="relative">

        <div class="swiper h-[500px] w-full" x-ref="heroSwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide relative">
                    <img src='{{ asset("storage/slide_0.png") }}'
                        class="w-full h-[500px] object-cover opacity-90">

                    <div class="absolute top-1/2 left-24 -translate-y-1/2 text-white">
                        <h1 class="text-6xl font-bold">Inventory Software</h1>
                        <h3 class="text-4xl mt-2">your stock, simplified.</h3>

                        <a href="#"
                        class="inline-block mt-6 rounded border border-white text-white font-semibold px-6 py-3 bg-blue-700 hover:bg-blue-500">
                            Start Now
                        </a>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img src='{{ asset("storage/slide_1.jpeg") }}'
                        class="w-full h-[500px] object-cover opacity-90">

                    <div class="absolute top-1/2 left-24 -translate-y-1/2 text-white">
                        <h1 class="text-6xl font-bold">Inventory Software</h1>
                        <h3 class="text-4xl mt-2">your stock, simplified.</h3>

                        <a href="#"
                        class="inline-block mt-6 rounded border border-white text-white font-semibold px-6 py-3 bg-blue-700 hover:bg-blue-500">
                            Start Now
                        </a>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img src='{{ asset("storage/slide_2.jpeg") }}'
                        class="w-full h-[500px] object-cover opacity-90">

                    <div class="absolute top-1/2 left-24 -translate-y-1/2 text-white">
                        <h1 class="text-6xl font-bold">Inventory Software</h1>
                        <h3 class="text-4xl mt-2">your stock, simplified.</h3>

                        <a href="#"
                        class="inline-block mt-6 rounded border border-white text-white font-semibold px-6 py-3 bg-blue-700 hover:bg-blue-500">
                            Start Now
                        </a>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img src='{{ asset("storage/slide_3.jpeg") }}'
                        class="w-full h-[500px] object-cover opacity-90">

                    <div class="absolute top-1/2 left-24 -translate-y-1/2 text-white">
                        <h1 class="text-6xl font-bold">Inventory Software</h1>
                        <h3 class="text-4xl mt-2">your stock, simplified.</h3>

                        <a href="#"
                        class="inline-block mt-6 rounded border border-white text-white font-semibold px-6 py-3 bg-blue-700 hover:bg-blue-500">
                            Start Now
                        </a>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img src='{{ asset("storage/slide_4.jpeg") }}'
                        class="w-full h-[500px] object-cover opacity-90">

                    <div class="absolute top-1/2 left-24 -translate-y-1/2 text-white">
                        <h1 class="text-6xl font-bold">Inventory Software</h1>
                        <h3 class="text-4xl mt-2">your stock, simplified.</h3>

                        <a href="#"
                        class="inline-block mt-6 rounded border border-white text-white font-semibold px-6 py-3 bg-blue-700 hover:bg-blue-500">
                            Start Now
                        </a>
                    </div>
                </div>

                <div class="swiper-slide relative">
                    <img src='{{ asset("storage/slide_5.jpeg") }}'
                        class="w-full h-[500px] object-cover opacity-90">

                    <div class="absolute top-1/2 left-24 -translate-y-1/2 text-white">
                        <h1 class="text-6xl font-bold">Inventory Software</h1>
                        <h3 class="text-4xl mt-2">your stock, simplified.</h3>

                        <a href="#"
                        class="inline-block mt-6 rounded border border-white text-white font-semibold px-6 py-3 bg-blue-700 hover:bg-blue-500">
                            Start Now
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="swiper-pagination" x-ref="pagination"></div>
    </div>

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
        <div class="container mx-auto flex-col items-center p-10">
            <div class="pb-13 pl-15">
                <h2 class="text-3xl font-extrabold text-gray-800 pb-10">
                    How Nova's stock control software boosts your business
                </h2>
                <p class="text-2xl">Nova organizes the items you buy and sell in a single place. You have all the crucial info, none of the fuss.</p>
            </div>
            <div class="flex justify-between">
                <div class="w-1/3 flex-col px-15">
                    <div class="flex items-center gap-4 pb-3">
                        <div class="bg-blue-500/90 shadow-2xs shadow-black/40 p-3 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white lucide lucide-clipboard-clock-icon lucide-clipboard-clock"><path d="M16 14v2.2l1.6 1"/><path d="M16 4h2a2 2 0 0 1 2 2v.832"/><path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/><circle cx="16" cy="16" r="6"/><rect x="8" y="2" width="8" height="4" rx="1"/></svg>
                        </div>
                        <h3 class="text-lg font-extrabold">Track your stock levels in real time</h3>
                    </div>
                    <div>
                        <p>Track stock levels with Nova’s inventory software for small business. Buy stock at the right time, every time.</p>
                    </div>
                </div>
                <div class="w-1/3 flex-col px-15">
                    <div class="flex items-center gap-4 pb-3">
                        <div class="bg-blue-500/90 shadow-2xs shadow-black/40 p-3 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white lucide lucide-package-search-icon lucide-package-search"><path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"/><path d="m7.5 4.27 9 5.15"/><polyline points="3.29 7 12 12 20.71 7"/><line x1="12" x2="12" y1="22" y2="12"/><circle cx="18.5" cy="15.5" r="2.5"/><path d="M20.27 17.27 22 19"/></svg>
                        </div>
                        <h3 class="text-lg font-extrabold">Improve your product management</h3>
                    </div>
                    <div>
                        <p>Spot the items selling best and earning the most, so you can buy what’s popular – and maximize your profitability.</p>
                    </div>
                </div>
                <div class="w-1/3 flex-col px-17">
                    <div class="flex items-center gap-4 pb-3">
                        <div class="bg-blue-500/90 shadow-2xs shadow-black/40 p-3 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white lucide lucide-squares-exclude-icon lucide-squares-exclude"><path d="M16 12v2a2 2 0 0 1-2 2H9a1 1 0 0 0-1 1v3a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2h0"/><path d="M4 16a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v3a1 1 0 0 1-1 1h-5a2 2 0 0 0-2 2v2"/></svg>
                        </div>
                        <h3 class="text-lg font-extrabold">Save time on your sales admin</h3>
                    </div>
                    <div>
                        <p>Let Nova auto populate your invoices and purchase orders with the relevant info for a fast, accurate process.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto flex-col text-center uppercase rounded-2xl bg-blue-50">
            <h1 class="text-xl font-extrabold pt-10 mb-3">solutions across every industry</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 px-45 mb-10">
                <a href="" class="flex pl-5 gap-2 bg-white border text-blue-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white hover:border-white p-3 m-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-car-icon lucide-car"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
                    <p>Automotive & Spare Parts</p>
                </a>
                <a href="" class="flex pl-5 gap-2 bg-white border text-blue-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white hover:border-white p-3 m-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flask-conical-icon lucide-flask-conical"><path d="M14 2v6a2 2 0 0 0 .245.96l5.51 10.08A2 2 0 0 1 18 22H6a2 2 0 0 1-1.755-2.96l5.51-10.08A2 2 0 0 0 10 8V2"/><path d="M6.453 15h11.094"/><path d="M8.5 2h7"/></svg>
                    <p>Chemical, pharma & healthcare</p>
                </a>
                <a href="" class="flex pl-5 gap-2 bg-white border text-blue-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white hover:border-white p-3 m-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cpu-icon lucide-cpu"><path d="M12 20v2"/><path d="M12 2v2"/><path d="M17 20v2"/><path d="M17 2v2"/><path d="M2 12h2"/><path d="M2 17h2"/><path d="M2 7h2"/><path d="M20 12h2"/><path d="M20 17h2"/><path d="M20 7h2"/><path d="M7 20v2"/><path d="M7 2v2"/><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="8" y="8" width="8" height="8" rx="1"/></svg>
                    <p>Electronics</p>
                </a>
                <a href="" class="flex pl-5 gap-2 bg-white border text-blue-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white hover:border-white p-3 m-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card-icon lucide-credit-card"><rect width="20" height="14" x="2" y="5" rx="2"/><line x1="2" x2="22" y1="10" y2="10"/></svg>
                    <p>Retail, E-Commerce & Fashion</p>
                </a>
                <a href="" class="flex pl-5 gap-2 bg-white border text-blue-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white hover:border-white p-3 m-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-factory-icon lucide-factory"><path d="M12 16h.01"/><path d="M16 16h.01"/><path d="M3 19a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.5a.5.5 0 0 0-.769-.422l-4.462 2.844A.5.5 0 0 1 15 10.5v-2a.5.5 0 0 0-.769-.422L9.77 10.922A.5.5 0 0 1 9 10.5V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2z"/><path d="M8 16h.01"/></svg>
                    <p>Industry & manufacturing</p>
                </a>
                <a href="" class="flex pl-5 gap-2 bg-white border text-blue-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white hover:border-white p-3 m-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils-crossed-icon lucide-utensils-crossed"><path d="m16 2-2.3 2.3a3 3 0 0 0 0 4.2l1.8 1.8a3 3 0 0 0 4.2 0L22 8"/><path d="M15 15 3.3 3.3a4.2 4.2 0 0 0 0 6l7.3 7.3c.7.7 2 .7 2.8 0L15 15Zm0 0 7 7"/><path d="m2.1 21.8 6.4-6.3"/><path d="m19 5-7 7"/></svg>
                    <p>Food & beverage</p>
                </a>
                <a href="" class="flex pl-5 gap-2 bg-white border text-blue-500 rounded border-blue-500 hover:bg-blue-500 hover:text-white hover:border-white p-3 m-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ship-icon lucide-ship"><path d="M12 10.189V14"/><path d="M12 2v3"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76"/><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>
                    <p>Logistics service</p>
                </a>
            </div>
            <img class="h-200 mx-auto block" src="{{ asset('storage/warehouse_processes.png') }}"> 
        </div>
    </section>

    <section class="bg-white">
        <div class="container mx-auto flex justify-between items-center">
            <div class="w-3/5 pr-3 pl-25 flex-col">
                <h2 class="text-4xl font-extrabold text-gray-800 pb-10">
                    Sell confidently with Nova inventory management
                </h2>
                <p class="text-2xl pb-5">Manage up to 4,000 items without breaking a sweat. Nova’s accounting and inventory software helps you keep your best-selling items ready for sale, fine-tune your stock levels using granular data, and make timely purchase orders. The result is better cash flow and a shorter to-do list.</p>
                <div class="text-lg flex flex-col gap-1.5">
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>See what’s selling at a glance for easy stock control</p>
                    </div>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Use stock-quantity insights to prevent over or under stocking for next season</p>
                    </div>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Plan your spending and budgets with reliable info on inventory turnover</p> 
                    </div>           
                </div>
            </div>
            <div class="w-2/5 pl-1 flex justify-center p-10">
                <img class="h-90" src="{{ asset('storage/inventory_track.svg') }}"> 
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto flex justify-between items-center rounded-2xl bg-blue-50">
            <div class="w-2/5 pl-1 flex justify-center p-10">
                <img class="h-90" src="{{ asset('storage/inventory_track_sales.svg') }}"> 
            </div>
            <div class="w-3/5 pr-25 flex-col">
                <h2 class="text-4xl font-extrabold text-gray-800 pb-10">
                    Discover opportunities in your inventory data
                </h2>
                <p class="text-2xl pb-5">When too many figures become a blur, Nova gives you clear and actionable data insights. See a practically real-time view of your stock quantities and run business reports with data visualizations. That way, it’s easier to spot ways to improve and grow your business.</p>
                <div class="text-lg flex flex-col gap-1.5">
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Look at your profit margins to strengthen your choice of products and sales strategy</p>
                    </div>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Get ready for seasonal trends with digestible graphs</p>
                    </div>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Plan your spending by looking at short-term cash flow projections</p> 
                    </div>           
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container mx-auto flex justify-between items-center">
            <div class="w-3/5 pr-3 pl-25 flex-col">
                <h2 class="text-4xl font-extrabold text-gray-800 pb-10">
                    Streamline invoicing with inventory software
                </h2>
                <p class="text-2xl pb-5">Use Nova’s inventory listings to speed up your billing. Just list each item’s description and price, then add the information to your quotes, invoices, and purchase orders again and again, instead of typing it in – sparing you manual entry every billing day.</p>
                <div class="text-lg flex flex-col gap-1.5">
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Save the details of items you buy and sell regularly in Nova’s accounting software with inventory</p>
                    </div>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Let Nova automatically populate your invoices and admin with the correct details to prevent human errors</p>
                    </div>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Update the prepopulated descriptions, prices, and sales taxes whenever you need to</p> 
                    </div>           
                </div>
            </div>
            <div class="w-2/5 pl-1 flex justify-center p-10">
                <img class="h-115" src="{{ asset('storage/inventory_track_invoices.svg') }}"> 
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto flex justify-between items-center rounded-2xl bg-blue-50">
            <div class="w-2/4 pl-1 flex justify-center p-10">
                <img class="h-140" src="{{ asset('storage/dashboard.webp') }}"> 
            </div>
            <div class="w-2/4 pr-25 flex-col">
                <h2 class="text-4xl font-extrabold text-gray-800 pb-10">
                    More visibility means better stock decisions
                </h2>
                <p class="text-2xl pb-5">Accounting and inventory are connected in Nova in one simple-to-use system, so you can quickly see how changes in stock levels affect your cash flow. Nova combines accurate data with detailed reports to help you make good financial decisions for your business.</p>
                <div class="text-lg flex flex-col gap-1.5">
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Everything in one place</p>
                    </div>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Connect to your bank</p>
                    </div>
                    <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Collaborate in real time</p> 
                    </div>
                         <div class="flex gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-green-500 font-extrabold lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg>
                        <p>Customize to suit your needs</p> 
                    </div>         
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white" x-data="{ yearly: false }">

        <div class="container mx-auto flex flex-col items-center py-16">

            <h2 class="text-4xl font-extrabold text-gray-800 pb-6">
                Ready to get started?
            </h2>

            <div class="flex items-center gap-4 mb-10">

                <span 
                    class="font-semibold"
                    :class="yearly ? 'text-gray-700' : 'text-blue-500'"
                >
                    Monthly
                </span>

                <button 
                    @click="yearly = !yearly" 
                    class="w-16 h-8 bg-gray-300 rounded-full relative transition"
                >
                    <span 
                        class="absolute top-1 left-0.5 h-6 w-6 bg-white rounded-full shadow transition"
                        :class="yearly ? 'translate-x-8' : 'translate-x-1'"
                    ></span>
                </button>

                <span 
                    class="font-semibold"
                    :class="yearly ? 'text-blue-500' : 'text-gray-700'"
                >
                    Yearly <span class="font-normal">(Save 20%)</span>
                </span>
            </div>


            <div class="flex flex-col md:flex-row gap-8">

                <div class="flex flex-col justify-between w-[350px] border-t-10 border-blue-400 rounded-b-2xl shadow-lg p-8">
                    <div>
                        <h2 class="text-3xl font-bold pb-4">One User Free</h2>

                        <div class="flex items-start gap-1">
                            <span class="text-2xl text-blue-500 font-semibold">€</span>
                            <span class="text-6xl text-blue-500 font-extrabold">0</span>
                        </div>

                        <p class="pt-4 text-gray-700">
                            Basic access to the <span class="font-semibold">Nova platform</span><br>
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 mt-8">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold">
                            START NOW
                        </button>
                        <button class="border-transparent text-transparent py-3 rounded-xl font-semibold">
                            TRANSPARENT
                        </button>
                    </div>
                </div>

                <div class="flex flex-col justify-between w-[350px] border-t-10 border-red-400 rounded-b-2xl shadow-lg p-8">
                    <div>
                        <h2 class="text-3xl font-bold pb-4">Standard</h2>

                        <template x-if="!yearly">
                            <div class="flex items-start gap-2">
                                <span class="text-2xl text-red-400 font-semibold">€</span>
                                <span class="text-6xl text-red-400 font-extrabold leading-none">14</span>
                                <div>
                                    <span class="text-red-400 text-2xl">.80</span>
                                    <p class="text-gray-600 text-sm">/ user / month</p>
                                </div>
                            </div>
                        </template>

                        <template x-if="yearly">
                            <div class="flex items-start gap-2">
                                <span class="text-2xl text-red-400 font-semibold">€</span>
                                <span class="text-6xl text-red-400 font-extrabold leading-none">11</span>
                                <div>
                                    <span class="text-red-400 text-2xl">.80</span>
                                    <p class="text-gray-600 text-sm">/ user / month</p>
                                </div>
                            </div>
                        </template>

                        <p class="pt-6 text-gray-700">
                            Full access to the <span class="font-semibold">Nova platform</span><br>
                            Multi-user collaboration in real time
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 mt-8">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold">
                            BUY NOW
                        </button>
                        <button class="border border-gray-300 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200">
                            FREE TRIAL
                        </button>
                    </div>
                </div>


                <div class="flex flex-col justify-between w-[350px] border-t-10 border-green-400 rounded-b-2xl shadow-lg p-8">
                    <div>
                        <h2 class="text-3xl font-bold pb-4">Custom</h2>

                        <template x-if="!yearly">
                            <div class="flex items-start gap-2">
                                <span class="text-2xl text-green-500 font-semibold">€</span>
                                <span class="text-6xl text-green-500 font-extrabold leading-none">22</span>
                                <div>
                                    <span class="text-green-500 text-2xl">.40</span>
                                    <p class="text-gray-600 text-sm">/ user / month</p>
                                </div>
                            </div>
                        </template>

                        <template x-if="yearly">
                            <div class="flex items-start gap-2">
                                <span class="text-2xl text-green-500 font-semibold">€</span>
                                <span class="text-6xl text-green-500 font-extrabold leading-none">17</span>
                                <div>
                                    <span class="text-green-500 text-2xl">.90</span>
                                    <p class="text-gray-600 text-sm">/ user / month</p>
                                </div>
                            </div>
                        </template>

                        <p class="pt-6 text-gray-700">
                            Full access to the <span class="font-semibold">Nova platform</span><br>
                            Multi-user collaboration in real time<br>
                            Advanced customization<br>
                            Priority support & onboarding
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 mt-8">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white py-3 rounded-xl font-semibold">
                            BUY NOW
                        </button>
                        <button class="border border-gray-300 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200">
                            FREE TRIAL
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-20 bg-white" id="faq">
        <div class="container mx-auto max-w-3xl">

            <h2 class="text-4xl font-extrabold text-center mb-12">
                Frequently Asked Questions
            </h2>

            <div class="space-y-4">

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-lg font-semibold hover:text-blue-500">What is Nova Inventory?</span>
                        <span class="text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700">
                        Nova Inventory is a cloud-based stock and invoicing system that helps small businesses manage inventory efficiently.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-lg font-semibold hover:text-blue-500">Does Nova work for small businesses?</span>
                        <span class="text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700">
                        Yes! Nova is designed specifically for small and medium-sized businesses needing simple inventory automation.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-lg font-semibold hover:text-blue-500">Can I track stock levels in real time?</span>
                        <span class="text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700">
                        Yes — Nova updates stock quantities instantly as products are purchased, sold, or adjusted.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-lg font-semibold hover:text-blue-500">Does Nova generate invoices automatically?</span>
                        <span class="text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700">
                        Nova can prefill invoices and purchase orders with saved item data to reduce manual work.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-lg font-semibold hover:text-blue-500">How many items can I manage?</span>
                        <span class="text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700">
                        The system supports up to 4,000 items, making it ideal for most small and medium operations.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-lg font-semibold hover:text-blue-500">Can my team use it together?</span>
                        <span class="text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700">
                        Yes — Nova supports multi-user collaboration in real time.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-lg font-semibold hover:text-blue-500">Is there a free version?</span>
                        <span class="text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700">
                        Yes — the One User Free plan gives full basic access with no cost.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <footer class="bg-blue-50/50 border-t border-gray-200 mt-20 pt-10 pb-2">
        <div class="container mx-auto text-center flex justify-between pb-2">
            <div class="flex flex-col gap-2 text-start">
                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone-icon lucide-phone"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/></svg>
                    <a href="" class="text-black text-lg font-semibold hover:text-blue-500 hover:underline">
                        +373 68 111 000
                    </a>

                </div>

                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail-icon lucide-mail"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/><rect x="2" y="4" width="20" height="16" rx="2"/></svg>
                    <a href="" class="text-black text-lg font-semibold hover:text-blue-500 hover:underline">support@novaintentory.com</a>
                </div>

                <div class="flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                    <p class="text-black text-lg font-semibold">Chisinau, bd. Dacia 14</p>
                </div>
            </div>

            <div class="flex justify-center gap-6 mb-6">

                <a href="#" class="text-blue-700 hover:text-blue-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 12.07C22 6.48 17.52 2 11.93 2S2 6.48 2 12.07c0 5.02 3.66 9.19 8.44 9.93v-7.03H7.9v-2.9h2.54V9.83c0-2.5 1.49-3.88 3.77-3.88 1.09 0 2.23.2 2.23.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.55v1.87h2.78l-.44 2.9h-2.34V22c4.78-.74 8.44-4.91 8.44-9.93z"/>
                    </svg>
                </a>

                <a href="#" class="text-blue-700 hover:text-blue-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.8-.9a1.1 1.1 0 11-2.2 0 1.1 1.1 0 012.2 0z"/>
                    </svg>
                </a>

                <a href="#" class="text-blue-700 hover:text-blue-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.6 3.2H4.4A4.4 4.4 0 000 7.6v8.8a4.4 4.4 0 004.4 4.4h15.2a4.4 4.4 0 004.4-4.4V7.6a4.4 4.4 0 00-4.4-4.4zM9.6 16V8l6.4 4-6.4 4z"/>
                    </svg>
                </a>

                <a href="#" class="text-blue-700 hover:text-blue-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M21 7.5a5.5 5.5 0 01-3.7-1.4A5.4 5.4 0 0115 2h-3v14.3a2.7 2.7 0 11-2.7-2.7c.3 0 .6.1.9.2V10a5.5 5.5 0 00-.9-.1 5.7 5.7 0 105.7 5.7V8.6a8.3 8.3 0 003.7.9V7.5z"/>
                    </svg>
                </a>

                <a href="#" class="text-blue-700 hover:text-blue-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M4.98 3.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM3 8.98h4v12H3v-12zM14.5 8.9c-2.1 0-3.5 1.1-4.1 2.2v-2.1h-4v12h4v-6.5c0-1.7.9-2.8 2.4-2.8 1.4 0 2.2.9 2.2 2.8v6.5h4v-7.1c0-4-2.1-5.8-4.5-5.8z"/>
                    </svg>
                </a>

            </div>
        </div>
        <div class="container mx-auto">
            <h3 class="text-black font-semibold text-center">© NOVA INVENTORY 2025</h3>
        </div>
    </footer>


    <main>
        @yield("main")
    </main>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>