@extends("app.layout")

@section("main")
    <div class="flex justify-between items-center sticky top-0 p-2 z-10 bg-white/80 border border-gray-100 backdrop-blur-md">
        <div>
        <p class="text-blue-500 font-semibold">Products (Sample)</p> 
        </div>
        <div class="flex items-center gap-3 mr-2">
            <a href="{{ route('home') }}">
                <x-fluentui-archive-arrow-back-16 class="w-6 h-6 text-blue-500 hover:text-blue-800" />
            </a>
            <a href="">
                <x-fluentui-question-circle-28-o class="w-6 h-6 text-blue-500 hover:text-blue-800" />
            </a>
            <a href="{{ route('homepageApp') }}" class="bg-blue-700 text-white text-sm font-semibold rounded-full px-2 py-1 hover:bg-blue-700/50"> {{ strtoupper(auth()->user()->name[0]) }} </a>
        </div>
    </div>

    <section class="flex justify-between py-5 pr-15">
        <div> </div>
        <div class="flex items-center border border-blue-700 text-sm rounded-xl p-2 bg-blue-300/50 hover:bg-blue-300 hover:text-white">
            <x-iconoir-plus class="w-5 h-5" />
            <button type="submit" class="">New</button>
        </div>

    </section>
    

    <section class="">
        <div class="grid grid-cols-5 gap-4 font-semibold border-b bg-gray-100/50 border-gray-300 p-2 mb-4">
            <div>Product</div>
            <div>Category</div>
            <div>SKU</div>
            <div>Quantity</div>
            <div>Price</div>
        </div>

        @foreach ($products as $product)
            <div class="grid grid-cols-5 gap-4 border-b border-gray-200 p-2 text-sm items-center">
                <div class="flex items-center gap-1">
                    <img class="w-10" src="{{ asset($product->image_url) }}" alt="{{ $product->name }}">
                    {{ $product->name }}
                </div>
                <div>{{ $product->subcategory->name ?? 'N/A' }}</div>
                <div>{{ $product->sku }}</div>
                <div>{{ $product->quantity }}</div>
                <div>${{ $product->price }}</div>
            </div>
        @endforeach
    </section>
@endsection