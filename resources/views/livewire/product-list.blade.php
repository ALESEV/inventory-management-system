<section>

    <div class="hidden md:grid grid-cols-7 gap-3 text-sm font-semibold 
                border-b border-gray-300 bg-white p-2 mb-4 sticky z-0 top-[124px]">
        <div>Product</div>
        <div>Category</div>
        <div>Location</div>
        <div>SKU</div>
        <div>Quantity</div>
        <div>Price</div>
        <div>Date Received</div>
    </div>

    @foreach ($products as $product)
        <a href="{{ route('product.show', $product->id) }}" 
           class="grid md:grid-cols-7 grid-cols-1 gap-2 border-b border-gray-200 p-3 
                  text-xs md:items-center hover:bg-gray-100 transition">

            <div class="flex items-center font-semibold gap-2">
                <img class="w-10 h-10 rounded-md object-cover" 
                     src="{{ asset($product->image_url) }}" alt="{{ $product->name }}">
                <span>{{ $product->name }}</span>
            </div>

            <div class="md:hidden text-gray-500">Category:</div>
            <div>{{ $product->subcategory->name ?? 'N/A' }}</div>

            <div class="md:hidden text-gray-500">Location:</div>
            <div>{{ $product->location ?? 'N/A' }}</div>

            <div class="md:hidden text-gray-500">SKU:</div>
            <div>{{ $product->sku }}</div>

            <div class="md:hidden text-gray-500">Quantity:</div>
            <div>{{ $product->quantity }}</div>

            <div class="md:hidden text-gray-500">Price:</div>
            <div>${{ $product->price }}</div>

            <div class="md:hidden text-gray-500">Received:</div>
            <div>{{ $product->date_received ?? 'Not Specified' }}</div>
        </a>
    @endforeach
</section>
