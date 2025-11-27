@extends('app.layout')

@section('main')
    <div class="container mx-auto max-w-full md:max-w-[1200px] p-6 space-y-8">

        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-700">
                Hi, {{ auth()->user()->name }}! This is your inventory dashboard.
            </h1>
            <p class="mt-2 text-gray-600">
                Feel free to customize this page to better suit your workflow.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row items-center justify-center sm:justify-between gap-2 bg-blue-700 text-white p-6 rounded shadow-md text-center sm:text-left">
            <h2 class="text-xl font-semibold mb-0">Total Inventory Value</h2>
            <p class="text-2xl font-bold">${{ number_format($totalPrice, 2) }}</p>
        </div>

        <section>
            <h2 class="text-2xl font-semibold mb-4">Categories & Subcategories</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($categories as $category)
                    <div class="border rounded-lg p-4 shadow-sm hover:shadow-md transition">
                        <h3 class="text-lg font-bold mb-3">{{ $category->name }}</h3>

                        @if ($category->subcategories->count())
                            <ul class="space-y-2">
                                @foreach ($category->subcategories as $subcategory)
                                    <li class="flex justify-between items-center">
                                        <span>{{ $subcategory->name }}</span>
                                        <span class="bg-blue-100 text-blue-700 text-xs font-semibold px-2 py-0.5 rounded">
                                            {{ $subcategory->products_count ?? 0 }} products
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-gray-500 italic">No subcategories</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
