@extends("app.layout")

@section("main")

<div class="p-6 space-y-6">

    <a href="{{ route('appInventoryProducts') }}" class="text-blue-700/70 hover:text-blue-700 inline-block">
        <x-fluentui-arrow-circle-left-12 class="w-10 h-10" />
    </a>

    <div class="flex flex-col md:flex-row items-start gap-6 mt-5">

        <img src="{{ asset($product->image_url) }}" 
             class="w-full max-w-[350px] md:w-75 md:h-75 rounded shadow-xs object-cover"
             alt="{{ $product->name }}">

        <div class="text-md w-full">

            <h1 class="text-3xl font-bold">{{ $product->name }}</h1>

            <div class="flex flex-col md:flex-row md:gap-16 px-2 py-5">

                <div class="flex flex-col space-y-3 md:min-w-[200px]">
                    <div class="flex items-center gap-4">
                        <p class="font-semibold">SKU:</p>
                        <p>{{ $product->sku }}</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <x-iconoir-list class="w-5 h-5 font-bold" />
                        <p>{{ $product->subcategory->name ?? 'N/A' }}</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <x-fluentui-barcode-scanner-24 class="w-5 h-5 font-bold" />
                        <p>{{ $product->barcode ?? 'N/A' }}</p>
                    </div>
                </div>

                <div class="flex flex-col space-y-3 md:min-w-[200px] mt-5 md:mt-0">
                    <div class="flex items-center gap-3">
                        <p class="font-semibold">Brand:</p>
                        <p>{{ $product->brand ?? 'N/A' }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <p class="font-semibold">Quantity:</p>
                        <p>{{ $product->quantity }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <p class="font-semibold">Price:</p>
                        <p>${{ number_format($product->price, 2) }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <p class="font-semibold">Location:</p>
                        <p>{{ $product->location ?? 'Unassigned' }}</p>
                    </div>
                </div>

                <div class="flex flex-col space-y-3 md:min-w-[200px] mt-5 md:mt-0">
                    <div class="flex items-center gap-3">
                        <p class="font-semibold">Date Received:</p>
                        <p>{{ $product->date_received ? \Carbon\Carbon::parse($product->date_received)->format('M d, Y h:i A') : 'Not Specified' }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <p class="font-semibold">Added On:</p>
                        <p>{{ $product->created_at?->format('M d, Y h:i A') ?? 'Not Specified' }}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <p class="font-semibold">Last Updated:</p>
                        <p>{{ $product->updated_at?->format('M d, Y h:i A') ?? 'Not Specified' }}</p>
                    </div>
                </div>

            </div>

            <div class="bg-white px-2 py-3 max-w-[820px] w-full">
                <h2 class="font-semibold text-lg">Description</h2>
                <p class="text-justify leading-relaxed">
                    {{ $product->description ?? 'No description available.' }}
                </p>
            </div>

        </div>
    </div>
</div>

@endsection
