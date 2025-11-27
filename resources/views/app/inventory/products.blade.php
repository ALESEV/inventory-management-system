@extends("app.layout")

@section("main")

<div x-data="{ openCreate: false }"> 

    <div class="flex justify-between items-center sticky top-0 p-2 z-10 bg-white/80 border border-gray-100 backdrop-blur-md">

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

    <section class="flex justify-between py-5 pr-15">
        <div></div>
        <div @click="openCreate = true"
            class="flex items-center cursor-pointer border border-blue-700 text-sm rounded-xl p-2 bg-blue-300/50 hover:bg-blue-700 hover:text-white">

            <x-iconoir-plus class="w-5 h-5" />
            <span>New</span>
        </div>
    </section>


    <!-- Modal Background -->
    <div x-show="openCreate"
        class="fixed inset-0 bg-black/40 flex justify-center items-center" x-transition>

        <!-- Modal Wrapper (needed for relative positioning) -->
        <div class="relative">

            <!-- ❌ Close button outside window with top-2 & left -2 -->
            <button @click="openCreate = false"
                class="absolute top-2 -right-10 bg-white border shadow-md rounded-full h-8 w-8 flex items-center justify-center text-gray-700 hover:bg-gray-200">
                ✕
            </button>

            <!-- Modal Window -->
            <div class="bg-white p-6 rounded shadow-xl w-[600px]">
                @livewire("product-create")
            </div>

        </div>
    </div>




    <section>
        <div class="grid grid-cols-6 gap-3 font-semibold border-b bg-gray-100/50 border-gray-300 p-2 mb-4">
            <div>Product</div>
            <div>Category</div>
            <div>Location</div>
            <div>SKU</div>
            <div>Quantity</div>
            <div>Price</div>
        </div>

        @foreach ($products as $product)
            <div class="grid grid-cols-6 gap-3 border-b border-gray-200 p-2 text-sm items-center">
                <div class="flex items-center gap-1">
                    <img class="w-10 rounded-md" src="{{ asset($product->image_url) }}" alt="{{ $product->name }}">
                    {{ $product->name }}
                </div>
                <div>{{ $product->subcategory->name ?? 'N/A' }}</div>
                <div>{{ $product->location }}</div>
                <div>{{ $product->sku }}</div>
                <div>{{ $product->quantity }}</div>
                <div>${{ $product->price }}</div>
            </div>
        @endforeach
    </section>

</div> 

@endsection
