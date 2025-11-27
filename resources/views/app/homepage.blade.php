@extends("app.layout")

@section("main")
    <div class="flex justify-between items-center sticky top-0 p-2 z-10 bg-white/80 border border-gray-100 backdrop-blur-md">
        <div>
            <p class="text-blue-500 font-semibold">Homepage (Sample)</p> 
        </div>
        <div class="flex items-center gap-3 mr-2">
            <a href="{{ route('home') }}">
                <x-fluentui-archive-arrow-back-16 class="w-6 h-6 text-blue-500 hover:text-blue-800" />
            </a>
            <a href="">
                <x-fluentui-question-circle-28-o class="w-6 h-6 text-blue-500 hover:text-blue-800" />
            </a>
            <a href="{{ route('userAdmin') }}" class="bg-blue-700 text-white text-sm font-semibold rounded-full px-2 py-1 hover:bg-blue-700/50">
                {{ strtoupper(auth()->user()->name[0]) }}
            </a>
        </div>
    </div>

    <div class="bg-gray-100 pb-40">

        <div class="container mx-auto max-w-full md:max-w-[1000px] px-3">

            <div class="p-6">
                <h1 class="text-3xl font-bold text-gray-700">Hello, {{ auth()->user()->name }} </h1>
                <h3 class="text-lg text-gray-700">Let's get to work!</h3>
            </div>

        </div>

        <div class="container mx-auto max-w-full md:max-w-[1000px] rounded-xl bg-white px-3">

            <div class="flex flex-col md:flex-row items-start md:items-center justify-between text-white bg-blue-900/95 px-5 py-4 rounded-t-xl"> 
                <div class="flex items-center gap-2">
                    <x-iconoir-rocket class="w-7 h-7" />
                    <h3>Check out Nova Inventory for yourself or get advice from an expert</h3>
                </div>

                <a href="" class="inline-flex items-center justify-center p-1 bg-white/50 rounded-full
                                transition-all duration-300 hover:scale-110 hover:bg-white/70 mt-3 md:mt-0">
                    <x-iconoir-xmark class="w-5 h-5" />
                </a>
            </div>

            <div class="flex flex-col md:flex-row">
                <img class="h-[220px] w-full md:w-auto rounded-bl-xl object-cover" src="{{ asset('storage/customer_support.jpg') }}" alt="Customer Support">

                <div class="flex flex-col items-start px-5">
                    <div class="text-sm py-4 flex flex-col gap-3">
                        <p>Our inventory experts have discussed workflows with many businesses.</p>
                        <p>We'll help you figure out if Nova Inventory is a good fit, or if you should check out a competitor instead.</p>
                        <p>All in ten minutes or less.</p>
                        <p>No pressure. No nonsense.</p>
                    </div>
                    <button type="submit"
                        class="bg-amber-300 px-2 py-1 rounded-xl hover:bg-blue-900/95 hover:text-white">
                        Sure, let's chat
                    </button>
                </div>
            </div>
        </div>

        <div class="container mx-auto max-w-full md:max-w-[1000px] rounded-xl bg-white mt-5 grid grid-cols-1 md:grid-cols-3 gap-1 px-3">

            {{-- Purchasing --}}
            <div>
                <div>
                    <a href="" class="group flex items-center justify-between bg-yellow-700 hover:bg-yellow-700/90 text-white px-5 py-4 rounded-tl-xl">
                        <div class="flex gap-2 items-center">
                            <x-tni-clipboard-tick class="w-6 h-6" />
                            <h1>Purchasing</h1>
                        </div>
                        <x-iconoir-plus class="w-6 h-6 group-hover:bg-white/50 group-hover:rounded-full" />
                    </a>
                </div>

                <div class="px-7 py-5 text-sm flex flex-col gap-4">
                    <a href="" class="flex items-center justify-between">
                        <p>Purchase orders</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>

                    <a href="" class="flex items-center justify-between">
                        <p>Purchase quotes</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>

                    <div class="border-b border-b-gray-400/50"></div>
                </div>

                <div class="px-7 text-sm flex flex-col gap-4">
                    <a href="" class="flex items-center justify-between">
                        <p>Vendors</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>
                </div>

                <div class="pr-10 pt-10 hidden md:block">
                    <img src="{{ asset('storage/purchase_order.png') }}" alt="Purchase Order">
                </div>
            </div>

            {{-- Inventory --}}
            <div>
                <div>
                    <a href="" class="group flex items-center justify-between bg-blue-700 hover:bg-blue-700/90 text-white px-5 py-4">
                        <div class="flex gap-2 items-center">
                            <x-tni-box class="w-6 h-6" />
                            <h1>Inventory</h1>
                        </div>
                        <x-iconoir-plus class="w-6 h-6 group-hover:bg-white/50 group-hover:rounded-full" />
                    </a>
                </div>

                <div class="px-7 py-5 text-sm flex flex-col gap-4">
                    <a href="{{ route('appInventoryProducts') }}" class="flex items-center justify-between hover:bg-blue-300 hover:text-white">
                        <p>Products</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>

                    <a href="" class="flex items-center justify-between">
                        <p>Reorder stock</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>

                    <a href="" class="flex items-center justify-between">
                        <p>Current stock</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>

                    <div class="border-b border-b-gray-400/50"></div>
                </div>

                <div class="px-7 text-sm flex flex-col gap-4">
                    <a href="" class="flex items-center justify-between">
                        <p>Stock transfers</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>
                    <a href="" class="flex items-center justify-between">
                        <p>Stock adjustments</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>
                    <a href="" class="flex items-center justify-between">
                        <p>Stock counts</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>
                    <a href="" class="flex items-center justify-between">
                        <p>Stockroom scans</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>
                </div>
            </div>

            {{-- Sales --}}
            <div>
                <div>
                    <a href="" class="group flex items-center justify-between bg-green-700 hover:bg-green-700/90 text-white px-5 py-4 rounded-tr-xl">
                        <div class="flex gap-2 items-center">
                            <x-iconoir-dollar-circle-solid class="w-6 h-6" />
                            <h1>Sales</h1>
                        </div>
                        <x-iconoir-plus class="w-6 h-6 group-hover:bg-white/50 group-hover:rounded-full" />
                    </a>
                </div>

                <div class="px-7 py-5 text-sm flex flex-col gap-4">
                    <a href="" class="flex items-center justify-between">
                        <p>Sales orders</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>

                    <a href="" class="flex items-center justify-between">
                        <p>Sales quotes</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>

                    <div class="border-b border-b-gray-400/50"></div>
                </div>

                <div class="px-7 text-sm flex flex-col gap-4">
                    <a href="" class="flex items-center justify-between">
                        <p>Customers</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>
                </div>

                <div class="pl-10 pt-10 hidden md:block">
                    <img src="{{ asset('storage/sales_order.png') }}" alt="Sales Order">
                </div>
            </div>
        </div>

        {{-- Reports --}}
        <div class="container mx-auto max-w-full md:max-w-[1000px] rounded-xl bg-white mt-5 px-3">

            <div>
                <div class="flex items-center justify-between bg-purple-900/70 text-white px-5 py-3 rounded-t-xl">
                    <div class="flex gap-2 items-center">
                        <x-fluentui-data-usage-20 class="w-7 h-7" />
                        <h1>Reports</h1>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-2">

                <div class="px-7 py-5 text-sm flex flex-col gap-4">
                    <a href="" class="flex items-center justify-between">
                        <p>Purchasing</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>

                    <a href="" class="flex items-center justify-between">
                        <p>Sales</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>
                </div>

                <div class="px-7 py-5 text-sm flex flex-col gap-4">
                    <a href="" class="flex items-center justify-between">
                        <p>Reordering and forecasting</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>

                    <a href="" class="flex items-center justify-between">
                        <p>Audit log</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>

                    <a href="" class="flex items-center justify-between">
                        <p>Stock levels</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>
                </div>

                <div class="px-7 py-5 text-sm flex flex-col gap-4">
                    <a href="" class="flex items-center justify-between">
                        <p>Payment and accounting</p>
                        <x-tni-right-o class="w-3 h-3" />
                    </a>
                </div>

                <div class="pr-10 pt-10 hidden md:block">
                    <img src="{{ asset('storage/reports.png') }}" alt="Purchase Order">
                </div>
            </div>

        </div>
    </div>
@endsection
