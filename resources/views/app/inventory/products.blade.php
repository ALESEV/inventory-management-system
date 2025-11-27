@extends("app.layout")

@section("main")

    <div x-data="{ openCreate: false }" class="pb-7"> 

        <div class="flex justify-between items-center sticky top-0 p-2 z-10 bg-white border border-gray-100">

            <p class="text-blue-500 font-semibold">Products (Sample)</p> 

            <div class="flex items-center gap-3 mr-2">
                <a href="{{ route('home') }}">
                    <x-fluentui-archive-arrow-back-16 class="w-6 h-6 text-blue-500 hover:text-blue-800" />
                </a>
                <a href="">
                    <x-fluentui-question-circle-28-o class="w-6 h-6 text-blue-500 hover:text-blue-800" />
                </a>
                <a href="{{ route('homepageApp') }}" class="bg-blue-700 text-white text-sm font-semibold rounded-full px-2 py-1 hover:bg-blue-700/50">
                    {{ strtoupper(auth()->user()->name[0]) }}
                </a>
            </div>

        </div>

        <section class="flex justify-end py-5 pr-15 bg-gray-100 sticky z-0 top-[46px]">
            <div @click="openCreate = true"
                class="flex items-center cursor-pointer border border-blue-700 text-sm rounded-xl p-2 bg-blue-300/50 hover:bg-blue-700 hover:text-white">

                <x-iconoir-plus class="w-5 h-5" />
                <span>New</span>
            </div>
        </section>

        <div x-show="openCreate"
            class="fixed inset-0 bg-black/40 flex justify-center z-20 items-center" x-transition>

            <div class="relative">

                <button @click="openCreate = false"
                    class="absolute top-2 -right-10 bg-white border shadow-md rounded-full h-8 w-8 flex items-center justify-center text-gray-700 hover:bg-gray-200">
                    ✕
                </button>

                <div class="bg-white p-6 rounded shadow-xl w-[600px]">
                    @livewire("product-create")
                </div>

            </div>
        </div>

        @livewire('product-list')

    </div> 

@endsection
