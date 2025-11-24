<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Inventory - Create Account</title>

    <link rel="icon" type="image/png" href="{{ asset('storage/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite('resources/css/app.css')
</head>
<body>

    <div class="min-h-screen flex items-center justify-center bg-blue-50/40 py-10 px-4">

        <div class="bg-white shadow-md rounded-2xl p-8 w-full max-w-md border border-blue-100">

            {{-- Logo + Title --}}
            <div class="flex flex-col items-center mb-6">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('storage/logo.png') }}" class="w-16 mb-3" alt="Nova Inventory Logo">
                </a>
                <h2 class="text-2xl font-semibold text-blue-700 text-center">Create your Nova Inventory account</h2>
            </div>

            {{-- Register Form --}}
            <form method="post" action="{{ route('registerPost') }}" class="space-y-5">
                @csrf

                {{-- Name --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" 
                        name="name"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        placeholder="Your full name"
                        value="{{ old('name') }}">
                    @error("name")
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" 
                        name="email"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        placeholder="Enter your email"
                        value="{{ old('email') }}">
                    @error("email")
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" 
                        name="password"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        placeholder="Create a password">
                    @error("password")
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" 
                        name="password_confirmation"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        placeholder="Confirm your password">
                    @error("password_confirmation")
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Register Button --}}
                <button type="submit"
                        class="w-full bg-blue-700 text-white py-2 rounded-lg font-medium hover:bg-blue-800 transition">
                    Create Account
                </button>

            </form>

            {{-- Extra Links --}}
            <div class="mt-5 text-center space-y-2">
                <p class="text-sm">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                        Log in
                    </a>
                </p>
            </div>

        </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
