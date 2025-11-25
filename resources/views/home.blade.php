@extends("layout")

@section("main")
    <div x-data 
        x-init="
            new Swiper($refs.heroSwiper, {
                loop: true,
                effect: 'slide',
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

        <div class="swiper w-full h-[350px] sm:h-[420px] lg:h-[500px]" x-ref="heroSwiper">

            <div class="swiper-wrapper">

                @foreach ([
                    'slide_0.png', 'slide_1.jpeg', 'slide_2.jpeg',
                    'slide_3.jpeg', 'slide_4.jpeg', 'slide_5.jpeg'
                ] as $slide)

                <div class="swiper-slide relative">
                    <img src="{{ asset('storage/'.$slide) }}"
                        class="w-full h-full object-cover opacity-90">


                    <div class="
                        absolute inset-0
                        flex flex-col
                        items-start lg:items-start
                        justify-center
                        px-6 sm:px-10 lg:pl-24
                        text-white
                        text-center sm:text-left
                    ">

                        <h1 class="text-3xl sm:text-4xl lg:text-6xl font-bold">
                            Inventory Software
                        </h1>

                        <h3 class="text-xl sm:text-2xl lg:text-4xl mt-2">
                            your stock, simplified.
                        </h3>

                        <a href="#"
                        class="inline-block mt-6 rounded border border-white text-white 
                                font-semibold px-5 py-2 sm:px-6 sm:py-3 
                                bg-blue-700 hover:bg-white/50 hover:text-blue-700 transition">
                            Start Now
                        </a>
                    </div>
                </div>

                @endforeach

            </div>
        </div>

        <div class="swiper-pagination bottom-4!" x-ref="pagination"></div>
    </div>


    <section class="py-16 bg-white">
        <div class="container mx-auto bg-blue-50 rounded-2xl flex flex-col lg:flex-row items-center lg:justify-between p-8 lg:p-12">

            <div class="w-full lg:w-1/2 flex justify-center mb-10 lg:mb-0">
                <img class="max-h-96 w-auto object-contain" 
                    src="{{ asset('storage/boxes.avif') }}" 
                    alt="Nova Inventory Visual">
            </div>

            <div class="w-full lg:w-1/2 flex flex-col lg:pl-8">
                <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-800 mb-6">
                    Inventory management software with Nova Inventory
                </h2>
                <p class="text-lg lg:text-2xl leading-relaxed">
                    Take control of your stock with Nova inventory software for small businesses. 
                    Instead of juggling spreadsheets and multiple tools, get one smooth system. 
                    Automatically track your items so you know when to reorder, breeze through your 
                    digital billing, and connect apps for extra tools.
                </p>
            </div>
        </div>
    </section>


    <section class="bg-white">
        <div class="container mx-auto flex flex-col items-center px-6 py-16">
            
            <div class="mb-12 text-center lg:text-left">
                <h2 class="text-3xl font-extrabold text-gray-800 mb-6">
                    How Nova's stock control software boosts your business
                </h2>
                <p class="text-xl max-w-2xl">
                    Nova organizes the items you buy and sell in a single place. You have all the crucial info, none of the fuss.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 w-full">

                <div class="flex flex-col">
                    <div class="flex items-center gap-4 pb-3">
                        <div class="bg-blue-500/90 shadow-md p-3 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="text-white">
                                <path d="M16 14v2.2l1.6 1"/>
                                <path d="M16 4h2a2 2 0 0 1 2 2v.832"/>
                                <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h2"/>
                                <circle cx="16" cy="16" r="6"/>
                                <rect x="8" y="2" width="8" height="4" rx="1"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-extrabold">Track your stock levels in real time</h3>
                    </div>
                    <p>
                        Track stock levels with Nova’s inventory software for small business. 
                        Buy stock at the right time, every time.
                    </p>
                </div>

                <div class="flex flex-col">
                    <div class="flex items-center gap-4 pb-3">
                        <div class="bg-blue-500/90 shadow-md p-3 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="text-white">
                                <path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"/>
                                <path d="m7.5 4.27 9 5.15"/>
                                <polyline points="3.29 7 12 12 20.71 7"/>
                                <line x1="12" x2="12" y1="22" y2="12"/>
                                <circle cx="18.5" cy="15.5" r="2.5"/>
                                <path d="M20.27 17.27 22 19"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-extrabold">Improve your product management</h3>
                    </div>
                    <p>
                        Spot the items selling best and earning the most, so you can buy what’s 
                        popular – and maximize your profitability.
                    </p>
                </div>

                <div class="flex flex-col">
                    <div class="flex items-center gap-4 pb-3">
                        <div class="bg-blue-500/90 shadow-md p-3 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="text-white">
                                <path d="M16 12v2a2 2 0 0 1-2 2H9a1 1 0 0 0-1 1v3a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2h0"/>
                                <path d="M4 16a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v3a1 1 0 0 1-1 1h-5a2 2 0 0 0-2 2v2"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-extrabold">Save time on your sales admin</h3>
                    </div>
                    <p>
                        Let Nova auto populate your invoices and purchase orders with the relevant 
                        info for a fast, accurate process.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section class="py-16 bg-white">
        <div class="container mx-auto flex flex-col text-center uppercase rounded-2xl bg-blue-50 px-6 md:px-12 lg:px-20">

            <h1 class="text-lg md:text-xl font-extrabold pt-10 mb-6">
                solutions across every industry
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10">

                <a href="#" class="flex items-center gap-3 bg-white border text-blue-500 rounded border-blue-500 
                                hover:bg-blue-500 hover:text-white hover:border-white p-4">
                    <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2" class="text-blue-500">
                        <path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/>
                        <circle cx="7" cy="17" r="2"/>
                        <path d="M9 17h6"/>
                        <circle cx="17" cy="17" r="2"/>
                    </svg>
                    <p class="text-sm md:text-base">Automotive & Spare Parts</p>
                </a>

                <a href="#" class="flex items-center gap-3 bg-white border text-blue-500 rounded border-blue-500 
                                hover:bg-blue-500 hover:text-white hover:border-white p-4">
                    <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2" class="text-blue-500">
                        <path d="M14 2v6a2 2 0 0 0 .245.96l5.51 10.08A2 2 0 0 1 18 22H6a2 2 0 0 1-1.755-2.96l5.51-10.08A2 2 0 0 0 10 8V2"/>
                        <path d="M6.453 15h11.094"/>
                        <path d="M8.5 2h7"/>
                    </svg>
                    <p class="text-sm md:text-base">Chemical, pharma & healthcare</p>
                </a>

                <a href="#" class="flex items-center gap-3 bg-white border text-blue-500 rounded border-blue-500 
                                hover:bg-blue-500 hover:text-white hover:border-white p-4">
                    <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2" class="text-blue-500">
                        <path d="M12 20v2"/><path d="M12 2v2"/><path d="M17 20v2"/><path d="M17 2v2"/>
                        <path d="M2 12h2"/><path d="M2 17h2"/><path d="M2 7h2"/>
                        <path d="M20 12h2"/><path d="M20 17h2"/><path d="M20 7h2"/>
                        <path d="M7 20v2"/><path d="M7 2v2"/>
                        <rect x="4" y="4" width="16" height="16" rx="2"/>
                        <rect x="8" y="8" width="8" height="8" rx="1"/>
                    </svg>
                    <p class="text-sm md:text-base">Electronics</p>
                </a>

                <a href="#" class="flex items-center gap-3 bg-white border text-blue-500 rounded border-blue-500 
                                hover:bg-blue-500 hover:text-white hover:border-white p-4">
                    <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2">
                        <rect width="20" height="14" x="2" y="5" rx="2"/>
                        <line x1="2" x2="22" y1="10" y2="10"/>
                    </svg>
                    <p class="text-sm md:text-base">Retail, E-Commerce & Fashion</p>
                </a>

                <a href="#" class="flex items-center gap-3 bg-white border text-blue-500 rounded border-blue-500 
                                hover:bg-blue-500 hover:text-white hover:border-white p-4">
                    <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2">
                        <path d="M12 16h.01"/><path d="M16 16h.01"/>
                        <path d="M3 19a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.5a.5.5 0 0 0-.769-.422l-4.462 2.844A.5.5 0 0 1 15 10.5v-2a.5.5 0 0 0-.769-.422L9.77 10.922A.5.5 0 0 1 9 10.5V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2z"/>
                        <path d="M8 16h.01"/>
                    </svg>
                    <p class="text-sm md:text-base">Industry & manufacturing</p>
                </a>

                <a href="#" class="flex items-center gap-3 bg-white border text-blue-500 rounded border-blue-500 
                                hover:bg-blue-500 hover:text-white hover:border-white p-4">
                    <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2">
                        <path d="m16 2-2.3 2.3a3 3 0 0 0 0 4.2l1.8 1.8a3 3 0 0 0 4.2 0L22 8"/>
                        <path d="M15 15 3.3 3.3a4.2 4.2 0 0 0 0 6l7.3 7.3c.7.7 2 .7 2.8 0L15 15Zm0 0 7 7"/>
                        <path d="m2.1 21.8 6.4-6.3"/>
                        <path d="m19 5-7 7"/>
                    </svg>
                    <p class="text-sm md:text-base">Food & beverage</p>
                </a>

                <a href="#" class="flex items-center gap-3 bg-white border text-blue-500 rounded border-blue-500 
                                hover:bg-blue-500 hover:text-white hover:border-white p-4">
                    <svg width="24" height="24" stroke="currentColor" fill="none" stroke-width="2">
                        <path d="M12 10.189V14"/><path d="M12 2v3"/>
                        <path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/>
                        <path d="M19.38 20A11.6 11.6 0 0 0 21 14l-8.188-3.639a2 2 0 0 0-1.624 0L3 14a11.6 11.6 0 0 0 2.81 7.76"/>
                        <path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1s1.2 1 2.5 1c2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/>
                    </svg>
                    <p class="text-sm md:text-base">Logistics service</p>
                </a>

            </div>

            <img class="max-h-[350px] w-auto mx-auto mb-10" 
                src="{{ asset('storage/warehouse_processes.png') }}"
                alt="Warehouse processes">
        </div>
    </section>


    <section class="py-16 bg-white">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center p-6 gap-10 md:gap-0">

            <div class="w-full md:w-3/5 md:pr-10">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 pb-6 md:pb-10">
                    Sell confidently with Nova inventory management
                </h2>

                <p class="text-lg md:text-2xl pb-5">
                    Manage up to 4,000 items without breaking a sweat. Nova’s accounting and inventory software 
                    helps you keep your best-selling items ready for sale, fine-tune your stock levels using 
                    granular data, and make timely purchase orders. The result is better cash flow and a shorter 
                    to-do list.
                </p>

                <div class="text-base md:text-lg flex flex-col gap-3">

                    <div class="flex gap-2 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500 mt-1">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>See what’s selling at a glance for easy stock control</p>
                    </div>

                    <div class="flex gap-2 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500 mt-1">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Use stock-quantity insights to prevent over or under stocking for next season</p>
                    </div>

                    <div class="flex gap-2 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500 mt-1">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Plan your spending and budgets with reliable info on inventory turnover</p> 
                    </div>

                </div>
            </div>

            <div class="w-full md:w-2/5 flex justify-center p-6 md:p-10">
                <img class="max-h-[350px] w-auto object-contain"
                    src="{{ asset('storage/inventory_track.svg') }}"
                    alt="Inventory tracking picture">
            </div>

        </div>
    </section>



    <section class="py-16 bg-white">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center rounded-2xl bg-blue-50 p-6 md:p-10">

            <div class="w-full md:w-2/5 flex justify-center mb-10 md:mb-0">
                <img class="max-h-[350px] w-auto object-contain"
                    src="{{ asset('storage/inventory_track_sales.svg') }}"
                    alt="Inventory analytics picture">
            </div>

            <div class="w-full md:w-3/5 md:pl-10">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 pb-6 md:pb-10">
                    Discover opportunities in your inventory data
                </h2>

                <p class="text-lg md:text-2xl pb-5">
                    When too many figures become a blur, Nova gives you clear and actionable data insights. 
                    See a practically real-time view of your stock quantities and run business reports with 
                    data visualizations. That way, it’s easier to spot ways to improve and grow your business.
                </p>

                <div class="text-base md:text-lg flex flex-col gap-3">

                    <div class="flex gap-2 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500 mt-1">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Look at your profit margins to strengthen your choice of products and sales strategy</p>
                    </div>

                    <div class="flex gap-2 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500 mt-1">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Get ready for seasonal trends with digestible graphs</p>
                    </div>

                    <div class="flex gap-2 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500 mt-1">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Plan your spending by looking at short-term cash flow projections</p>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="bg-white py-16">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">

            <div class="w-full md:w-3/5 md:pr-10 px-4 md:px-0 mb-10 md:mb-0">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 pb-6 md:pb-10">
                    Streamline invoicing with inventory software
                </h2>

                <p class="text-lg md:text-2xl pb-5">
                    Use Nova’s inventory listings to speed up your billing. Just list each item’s description and 
                    price, then add the information to your quotes, invoices, and purchase orders again and again, 
                    instead of typing it in – sparing you manual entry every billing day.
                </p>

                <div class="text-base md:text-lg flex flex-col gap-3">

                    <div class="flex gap-2 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500 mt-1">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Save the details of items you buy and sell regularly in Nova’s accounting software with inventory</p>
                    </div>

                    <div class="flex gap-2 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500 mt-1">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Let Nova automatically populate your invoices and admin with the correct details to prevent human errors</p>
                    </div>

                    <div class="flex gap-2 items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500 mt-1">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Update the prepopulated descriptions, prices, and sales taxes whenever you need to</p>
                    </div>

                </div>
            </div>

            <div class="w-full md:w-2/5 flex justify-center px-4 md:px-0">
                <img class="max-h-[350px] w-auto object-contain" 
                    src="{{ asset('storage/inventory_track_invoices.svg') }}" 
                    alt="Inventory invoicing picture">
            </div>

        </div>
    </section>


    <section class="py-16 bg-white">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center rounded-2xl bg-blue-50 p-6 md:p-10">

            <div class="w-full md:w-1/2 flex justify-center mb-10 md:mb-0">
                <img class="max-h-[400px] w-auto object-contain" src="{{ asset('storage/dashboard.webp') }}" alt="Dashboard Preview"> 
            </div>

            <div class="w-full md:w-1/2 flex flex-col md:pl-10">

                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 pb-6 md:pb-10">
                    More visibility means better stock decisions
                </h2>

                <p class="text-lg md:text-2xl pb-5">
                    Accounting and inventory are connected in Nova in one simple-to-use system, 
                    so you can quickly see how changes in stock levels affect your cash flow. 
                    Nova combines accurate data with detailed reports to help you make good 
                    financial decisions for your business.
                </p>

                <div class="text-base md:text-lg flex flex-col gap-2 md:gap-3">

                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Everything in one place</p>
                    </div>

                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Connect to your bank</p>
                    </div>

                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
                        <p>Collaborate in real time</p>
                    </div>

                    <div class="flex gap-2 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" class="text-green-500">
                            <path d="M20 6 9 17l-5-5"/>
                        </svg>
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


    <section class="py-16 md:py-20 bg-white" id="faq">
        <div class="container mx-auto max-w-3xl px-4">

            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-10 md:mb-12">
                Frequently Asked Questions
            </h2>

            <div class="space-y-4">

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-base md:text-lg font-semibold hover:text-blue-500">
                            What is Nova Inventory?
                        </span>
                        <span class="text-xl md:text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700 text-sm md:text-base">
                        Nova Inventory is a cloud-based stock and invoicing system that helps small businesses manage inventory efficiently.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-base md:text-lg font-semibold hover:text-blue-500">
                            Does Nova work for small businesses?
                        </span>
                        <span class="text-xl md:text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700 text-sm md:text-base">
                        Yes! Nova is designed specifically for small and medium-sized businesses needing simple inventory automation.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-base md:text-lg font-semibold hover:text-blue-500">
                            Can I track stock levels in real time?
                        </span>
                        <span class="text-xl md:text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700 text-sm md:text-base">
                        Yes — Nova updates stock quantities instantly as products are purchased, sold, or adjusted.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-base md:text-lg font-semibold hover:text-blue-500">
                            Does Nova generate invoices automatically?
                        </span>
                        <span class="text-xl md:text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700 text-sm md:text-base">
                        Nova can prefill invoices and purchase orders with saved item data to reduce manual work.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-base md:text-lg font-semibold hover:text-blue-500">
                            How many items can I manage?
                        </span>
                        <span class="text-xl md:text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700 text-sm md:text-base">
                        The system supports up to 4,000 items, making it ideal for most small and medium operations.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-base md:text-lg font-semibold hover:text-blue-500">
                            Can my team use it together?
                        </span>
                        <span class="text-xl md:text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700 text-sm md:text-base">
                        Yes — Nova supports multi-user collaboration in real time.
                    </div>
                </div>

                <div x-data="{ open: false }" class="border-b py-4">
                    <button @click="open = !open" class="w-full flex justify-between items-center text-left">
                        <span class="text-base md:text-lg font-semibold hover:text-blue-500">
                            Is there a free version?
                        </span>
                        <span class="text-xl md:text-2xl" x-text="open ? '-' : '+'"></span>
                    </button>
                    <div x-show="open" x-collapse class="mt-3 text-gray-700 text-sm md:text-base">
                        Yes — the One User Free plan gives full basic access with no cost.
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="py-16 bg-blue-50">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-4xl font-extrabold mb-10">What Our Customers Say</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="bg-white rounded-xl shadow-md flex flex-col gap-4 justify-between p-4">
                <img
                class="object-cover rounded-t-xl w-full aspect-square opacity-90"
                src="{{ asset('storage/fashion_business_owner2.jpg') }}"
                alt="Anna Melani"
                />
                <p class="text-gray-700 px-1.5">"Nova Inventory transformed how we manage stock — easier, faster, and accurate!"</p>
                <h3 class="font-semibold text-md pb-1.5">Anna Melani<br />Fashion Business Owner</h3>
            </div>
            <div class="bg-white rounded-xl shadow-md flex flex-col gap-4 justify-between p-4">
                <img
                class="object-cover rounded-t-xl w-full aspect-square opacity-90"
                src="{{ asset('storage/warehouse_manager.jpg') }}"
                alt="Alexandr Ulianov"
                />
                <p class="text-gray-700 px-1.5">"The insights helped us optimize purchases and reduce waste significantly."</p>
                <h3 class="font-semibold text-md pb-1.5">Alexandr Ulianov<br />Warehouse Manager</h3>
            </div>
            <div class="bg-white rounded-xl shadow-md flex flex-col gap-4 justify-between p-4">
                <img
                class="object-cover rounded-t-xl w-full aspect-square opacity-90"
                src="{{ asset('storage/ecommerce_business_owner.jpg') }}"
                alt="Andrei Ciuperca"
                />
                <p class="text-gray-700 px-1.5">"Excellent software and support. Highly recommend for small businesses."</p>
                <h3 class="font-semibold text-md pb-1.5">Andrei Ciuperca<br />E-Commerce Business Owner</h3>
            </div>
            <div class="bg-white rounded-xl shadow-md flex flex-col gap-4 justify-between p-4">
                <img
                class="object-cover rounded-t-xl w-full aspect-square opacity-90"
                src="{{ asset('storage/retail_store_owner.webp') }}"
                alt="Maria Andriuta"
                />
                <p class="text-gray-700 px-1.5">"Nova made invoicing and stock tracking seamless for our retail store."</p>
                <h3 class="font-semibold text-md pb-1.5">Maria Andriuta<br />Retail Store Manager</h3>
            </div>
            <div class="bg-white rounded-xl shadow-md flex flex-col gap-4 justify-between p-4">
                <img
                class="object-cover rounded-t-xl w-full aspect-square opacity-90"
                src="{{ asset('storage/manufacturing_lead.jpg') }}"
                alt="Ion Ceban"
                />
                <p class="text-gray-700 px-1.5">"The real-time stock updates improved our manufacturing scheduling and delivery."</p>
                <h3 class="font-semibold text-md pb-1.5">Ion Ceban<br />Manufacturing Lead</h3>
            </div>
            </div>
        </div>
    </section>


@endsection