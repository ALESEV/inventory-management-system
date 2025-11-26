<div class="fixed left-0 top-0 h-screen w-[70px] bg-blue-900/95 text-white flex flex-col items-center justify-between py- shadow-xl">

    <div class="flex flex-col items-center">
        <a href="{{ route('homepageApp') }}" class="mt-3 mb-4">
            <img class="w-9 cursor-pointer hover:opacity-70" 
                src="{{ asset('storage/logo_white.png') }}" 
                alt="Nova Logo">
        </a>

        <nav class="flex flex-col items-center space-y-2.5 flex-1">

            {{-- Add New --}}
            <a href="" class="bg-white/30 text-amber-400 hover:bg-amber-400 hover:text-blue-700 p-2 rounded-lg flex flex-col items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6 "
                    viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"/>
                    <path d="M12 5v14"/>
                </svg>
            </a>

            {{-- Sales --}}
            <a href="" class="hover:bg-white p-2 rounded-lg hover:text-green-700">
                <x-iconoir-dollar-circle-solid class="w-7 h-7 " />
            </a>

            {{-- Inventory --}}
            <a href="{{ route('appInventoryProducts') }}" class="hover:bg-white p-2 rounded-lg hover:text-blue-700">
                <x-tni-box class="w-6 h-6 " />
            </a>

            {{-- Purchasing --}}
            <a href="" class="hover:bg-white p-2 rounded-lg hover:text-yellow-700">
                <x-tni-clipboard-tick class="w-6 h-6 " />
            </a>

            {{-- Report --}}
            <a href="" class="hover:bg-white p-2 rounded-lg hover:text-purple-900/70">
                <x-fluentui-data-usage-20 class="w-8 h-8 " />
            </a>

        </nav>
    </div>

    <div class="flex flex-col items-center mb-5">
        
            {{-- Report --}}
            <a href="" class="hover:bg-white p-2 rounded-lg hover:text-yellow-600"">
                <x-iconoir-shop-window class="w-7 h-7 " />
            </a>


            {{-- Report --}}
            <a href="" class="hover:bg-white p-2 rounded-lg hover:text-yellow-600"">
                <x-fluentui-apps-add-in-16-o class="w-7 h-7 " />
            </a>


            {{-- Report --}}
            <a href="" class="hover:bg-white p-2 rounded-lg hover:text-yellow-600">
                <x-iconoir-settings class="w-7 h-7 " />
            </a>
    </div>

</div>
