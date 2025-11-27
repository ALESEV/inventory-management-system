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

    <div class="bg-white shadow-sm rounded-2xl p-8 w-full max-w-md border border-blue-100 relative">

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

            <div class="flex flex-col">
                <label class="text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <div class="flex items-center gap-2 border border-gray-300 rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-blue-400">
                    <x-tni-user-o class="h-5 w-5 text-blue-600" />
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

            <div class="flex flex-col">
                <label class="text-sm font-medium text-gray-700 mb-1">Email</label>
                <div class="flex items-center gap-2 border border-gray-300 rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-blue-400">
                    <x-iconoir-mail class="text-blue-600 w-5 h-5" />
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

            <div class="flex flex-col">
                <label class="text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="flex items-center gap-2 border border-gray-300 rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-blue-400">
                    <x-tni-password-o class="text-blue-600 w-5 h-5" />
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

            <div class="flex flex-col">
                <label class="text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <div class="flex items-center gap-2 border border-gray-300 rounded-lg px-3 py-2 focus-within:ring-2 focus-within:ring-blue-400">
                    <x-tni-password-o class="text-blue-600 w-5 h-5" />
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
