<div class="p-6 border rounded bg-white text-sm shadow-md max-w-3xl mx-auto">

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 p-2 mb-4 rounded">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="font-semibold text-xs">Category</label>
            <select wire:model="subcategory_id" class="w-full border rounded p-2 mt-1">
                <option value="">Select category</option>
                @foreach($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="font-semibold text-xs">Product Name</label>
            <input wire:model="name" type="text" class="w-full border rounded p-2 mt-1"/>
        </div>

        <div>
            <label class="font-semibold text-xs">Slug</label>
            <input wire:model="slug" type="text" class="w-full border rounded p-2 mt-1"/>
        </div>

        <div>
            <label class="font-semibold text-xs">SKU</label>
            <input wire:model="sku" type="text" class="w-full border rounded p-2 mt-1"/>
        </div>

        <div class="md:col-span-2">
            <label class="font-semibold text-xs">Description</label>
            <textarea wire:model="description" class="w-full border rounded p-2 mt-1"></textarea>
        </div>

        <div>
            <label class="font-semibold text-xs">Barcode</label>
            <input wire:model="barcode" type="text" class="w-full border rounded p-2 mt-1"/>
        </div>

        <div>
            <label class="font-semibold text-xs">Brand</label>
            <input wire:model="brand" type="text" class="w-full border rounded p-2 mt-1"/>
        </div>

        <div>
            <label class="font-semibold text-xs">Image URL</label>
            <input wire:model="image_url" type="text" class="w-full border rounded p-2 mt-1"/>
        </div>

        <div>
            <label class="font-semibold text-xs">Quantity</label>
            <input wire:model="quantity" type="number" min="0" class="w-full border rounded p-2 mt-1"/>
        </div>

        <div>
            <label class="font-semibold text-xs">Price</label>
            <input wire:model="price" type="number" step="0.01" class="w-full border rounded p-2 mt-1"/>
        </div>

        <div>
            <label class="font-semibold text-xs">Location</label>
            <input wire:model="location" type="text" class="w-full border rounded p-2 mt-1"/>
        </div>

        <div>
            <label class="font-semibold text-xs">Date Received</label>
            <input wire:model="date_received" type="date" class="w-full border rounded p-2 mt-1"/>
        </div>

        <div class="md:col-span-2 flex justify-end">
            <button class="bg-blue-600 px-4 py-2 text-white rounded hover:bg-blue-700">
                Save Product
            </button>
        </div>
    </form>

</div>
