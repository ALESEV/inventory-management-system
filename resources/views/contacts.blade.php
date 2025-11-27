@extends("layout")

@section("main")

    <div class="relative w-full h-[500px] sm:h-[400px] xs:h-[300px]">
        <img src="{{ asset('storage/contacts.jpg') }}" class="w-full h-full object-cover opacity-90">

        <div class="absolute top-1/2 left-16 xs:left-4 sm:left-8 -translate-y-1/2 text-white max-w-[90vw]">
            <h1 class="text-6xl sm:text-4xl xs:text-3xl font-extrabold leading-tight">Contact Nova Inventory Team</h1>
            <p class="text-2xl sm:text-xl xs:text-lg mt-3">We’re here to help, anytime you need us.</p>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="container mx-auto text-center px-6">
            <h2 class="text-4xl font-extrabold text-gray-800 mb-10">Get in Touch</h2>

            <p class="text-lg text-gray-700 max-w-2xl mx-auto leading-relaxed">
                Have questions about our system? <br>
                Need technical support? or want to schedule a demo?<br>
                <br>
                Our support team is always ready to help you.
            </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-14">

            <div class="flex flex-col items-center bg-blue-50 hover:bg-blue-100 transition rounded-2xl shadow-md p-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"/>
                </svg>
                <h3 class="text-xl font-semibold mt-3">Phone</h3>
                <p class="text-gray-700 mt-2">+373 68 111 000</p>
            </div>

            <div class="flex flex-col items-center bg-blue-50 hover:bg-blue-100 transition rounded-2xl shadow-md p-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"/>
                    <rect x="2" y="4" width="20" height="16" rx="2"/>
                </svg>
                <h3 class="text-xl font-semibold mt-3">Email</h3>
                <p class="text-gray-700 mt-2">support@novainventory.com</p>
            </div>

            <div class="flex flex-col items-center bg-blue-50 hover:bg-blue-100 transition rounded-2xl shadow-md p-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                <h3 class="text-xl font-semibold mt-3">Office</h3>
                <p class="text-gray-700 mt-2">Republic of Moldova<br> Chisinau, bd. Dacia 66</p>
            </div>

        </div>

        <div class="mt-14 flex justify-center w-full">
            <div class="rounded-2xl overflow-hidden shadow-md w-full md:w-4/5 lg:w-3/5">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2021.432790162613!2d28.856293130435912!3d46.98702104731447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2s!4v1764264794315!5m2!1sen!2s"
                    width="100%" height="450" style="border:0;" loading="lazy"
                    allowfullscreen referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>


    </section>

    <section class="py-8 bg-blue-50">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Send us a Message</h2>

            <div class="max-w-xl mx-auto bg-white shadow-md p-5 rounded-2xl">
                <form action="#" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @csrf

                    <div>
                        <label class="font-semibold text-sm text-gray-700">Full Name</label>
                        <input type="text" class="w-full border rounded p-2" required>
                    </div>

                    <div>
                        <label class="font-semibold text-sm text-gray-700">Email</label>
                        <input type="email" class="w-full border rounded p-2" required>
                    </div>

                    <div class="md:col-span-2">
                        <label class="font-semibold text-sm text-gray-700">Subject</label>
                        <input type="text" class="w-full border rounded p-2">
                    </div>

                    <div class="md:col-span-2">
                        <label class="font-semibold text-sm text-gray-700">Message</label>
                        <textarea rows="5" class="w-full border rounded p-2" required></textarea>
                    </div>

                    <div class="md:col-span-2 flex justify-end">
                        <button class="bg-blue-600 px-6 py-3 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                            Send
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>

@endsection
