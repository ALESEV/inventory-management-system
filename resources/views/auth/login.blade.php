<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Inventory - Inventory Management System</title>

    <link rel="icon" type="image/png" href="{{ asset('storage/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite('resources/css/app.css')
</head>
<body>

    <div class="min-h-screen flex items-center justify-center bg-blue-50/40 py-10 px-4">

        <div class="bg-white shadow-md rounded-2xl p-8 w-full max-w-md border border-blue-100">

            <div class="flex flex-col items-center mb-6">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('storage/logo.png') }}" class="w-16 mb-3" alt="Nova Inventory Logo">
                </a>
                <h2 class="text-2xl font-semibold text-blue-700">Log in to Nova Inventory</h2>
            </div>

            <form action="{{ route('loginPost') }}" method="post" class="space-y-5">
                @csrf

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

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" 
                        name="password"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none"
                        placeholder="Enter your password">
                    @error("password")
                        <p class="text-red-600 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full bg-blue-700 text-white py-2 rounded-lg font-medium hover:bg-blue-800 transition">
                    Login
                </button>

            </form>

            <div class="mt-5 text-center space-y-2">
                <a href="#" class="text-blue-600 hover:underline text-sm">Forgot password?</a>

                <p class="text-sm">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-blue-600 hover:underline">
                        Sign up
                    </a>
                </p>
            </div>

        </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>

