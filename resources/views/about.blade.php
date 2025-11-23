@extends("layout")

@section("main")

<div class="relative h-[500px] w-full">
    <img src="{{ asset('storage/about_us_baner.jpg') }}" class="w-full h-[500px] object-cover opacity-90">

    <div class="absolute top-1/2 left-16 -translate-y-1/2 text-white">
        <h1 class="text-6xl font-extrabold">About Nova Inventory</h1>
        <p class="text-2xl mt-3">We are your reliable partner for inventory solutions.</p>
    </div>
</div>

<section class="py-20 bg-white">
    <div class="container mx-auto flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-6">Who We Are</h2>
            <p class="text-xl text-gray-700 leading-relaxed">
                Nova Inventory is a technology-driven company dedicated to delivering reliable, modern inventory and business management solutions. We work closely with small and medium-sized businesses to help them streamline operations, reduce errors, and gain clear visibility into their stock and performance.
            </p>
        </div>
        <div class="md:w-1/2 flex justify-center">
            <img src="{{ asset('storage/who.jpg') }}" class="rounded-2xl shadow-md w-4/5">
        </div>
    </div>
</section>

<section class="py-20 bg-blue-50">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-10">Our Core Values</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <div class="bg-white rounded-2xl shadow-lg p-6">
                <img src="{{ asset('storage/value_1.png') }}" 
                     class="w-20 h-20 object-contain mx-auto">
                <h3 class="text-xl font-bold mt-4">Innovation</h3>
                <p class="text-gray-600 mt-2">
                    We develop modern, forward-thinking technology that helps businesses stay ahead.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6">
                <img src="{{ asset('storage/value_2.png') }}" 
                     class="w-20 h-20 object-contain mx-auto">
                <h3 class="text-xl font-bold mt-4">Reliability</h3>
                <p class="text-gray-600 mt-2">
                    Our systems are built for stability and accuracy you can depend on daily.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6">
                <img src="{{ asset('storage/value_3.png') }}" 
                     class="w-20 h-20 object-contain mx-auto">
                <h3 class="text-xl font-bold mt-4">Simplicity</h3>
                <p class="text-gray-600 mt-2">
                    We believe powerful tools should remain intuitive, clean, and easy to use.
                </p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6">
                <img src="{{ asset('storage/value_4.png') }}" 
                     class="w-20 h-20 object-contain mx-auto">
                <h3 class="text-xl font-bold mt-4">Customer Focus</h3>
                <p class="text-gray-600 mt-2">
                    Every feature and improvement is designed with your business needs in mind.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto">
        <h2 class="text-4xl font-extrabold text-gray-800 mb-10 text-center">Our Projects</h2>

        <div class="swiper">
            <div class="swiper-wrapper">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="swiper-slide bg-gray-300 rounded-lg flex items-center justify-center text-2xl px-20 py-50 font-semibold text-gray-800">
                        Project {{ $i }}
                    </div>
                @endfor
            </div>
            
            <div class="swiper-pagination"></div>
            
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.swiper', {
            slidesPerView: 3,
            centeredSlides: true,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                type: 'fraction',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>

@endsection
