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

    <div class="bg-white shadow-md rounded-2xl p-8 w-full max-w-md border border-blue-100 relative">

        <!-- Top bar with logo + title -->
        <div class="flex items-center gap-4 mb-8 border-b pb-4">
            <a href="{{ route('home') }}">
                <img src="{{ asset('storage/logo.png') }}" class="w-14" alt="Nova Inventory Logo">
            </a>
            <h2 class="text-xl font-semibold text-blue-700 leading-snug">
                Create Your Account
            </h2>
        </div>

        <form method="post" action="{{ route('registerPost') }}" class="space-y-5">
            @csrf

            <!-- Full Name -->
            <div class="flex flex-col">
                <label class="text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <div class="flex items-center gap-2 border border-gray-300 rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6.75a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 20.25a8.25 8.25 0 1116.5 0H4.5z" />
                    </svg>
                    <input 
                        type="text" 
                        name="name"
                        class="w-full outline-none"
                        placeholder="Your full name"
                        value="{{ old('name') }}">
                </div>
                @error("name")
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="flex flex-col">
                <label class="text-sm font-medium text-gray-700 mb-1">Email</label>
                <div class="flex items-center gap-2 border border-gray-300 rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 12H8m8 0l-4 4m4-4l-4-4M4 6h16v12H4z" />
                    </svg>
                    <input 
                        type="email" 
                        name="email"
                        class="w-full outline-none"
                        placeholder="Enter your email"
                        value="{{ old('email') }}">
                </div>
                @error("email")
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div class="flex flex-col">
                <label class="text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="flex items-center gap-2 border border-gray-300 rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6-8h12v10H6V9zm5-5h2a3 3 0 013 3v2H8V7a3 3 0 013-3z" />
                    </svg>
                    <input 
                        type="password" 
                        name="password"
                        class="w-full outline-none"
                        placeholder="Create a password">
                </div>
                @error("password")
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="flex flex-col">
                <label class="text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <div class="flex items-center gap-2 border border-gray-300 rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15v2m-6-8h12v10H6V9zm5-5h2a3 3 0 013 3v2H8V7a3 3 0 013-3z" />
                    </svg>
                    <input 
                        type="password" 
                        name="password_confirmation"
                        class="w-full outline-none"
                        placeholder="Confirm your password">
                </div>
                @error("password_confirmation")
                    <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="w-full bg-blue-700 text-white py-2.5 rounded-lg font-medium hover:bg-blue-800 transition">
                Create Account
            </button>

        </form>

        <!-- Footer -->
        <div class="mt-6 text-center">
            <p class="text-sm">
                Already have an account?
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                    Login
                </a>
            </p>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
