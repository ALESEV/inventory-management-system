<section>
    <div class="grid grid-cols-6 gap-3 font-semibold border-b border-gray-300 bg-white p-2 mb-4 sticky z-0 top-[124px]">
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