    <script src="https://cdn.tailwindcss.com"></script>

    <body class="bg-blue-100">
    <header id="navbar" class="sticky top-0 left-0 w-full flex items-center bg-white z-50">
        <div class="container mx-auto py-2">
            <div class="mx-auto flex items-center justify-between ">
        <!-- Logo -->
                <div class="font-xl flex items-center space-x-2 ms-32">
                    <img src="/images/travelin.png" alt="Logo" class="w-12 h-12">
                    <a href="/" class="font-bold text-3xl" >travelin</a>
                </div>

                <div class="flex items-center space-x-6 me-32">

                    <!-- Links -->
                    <a href="#" class="hover:underline">Bantuan</a>
                    <a href="#" class="hover:underline">Pesanan</a>

                    <!-- Buttons -->
                    <div class="flex items-center space-x-4">
                        <button class="hover:underline">Log In</button>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-4 rounded">Daftar</button>
                    </div>
                </div>
            </div>
            <nav class="text-xl font-bold mt-4 flex justify-evenly ms-16 me-16">
                <a href="hotel"  class="hover:underline">Hotel</a>
                <a href="pesawat" class="hover:underline">Tiket Pesawat</a>
                <a href="kereta" class="hover:underline">Tiket Kereta Api</a>
                <a href="bus" class="hover:underline">Tiket Bus & Travel</a>
                <a href="antar" class="hover:underline">Antar Jemput</a>
                <a href="rental" class="hover:underline">Rental Mobil</a>
                <a href="profile" class="hover:underline">Profile Company</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-8">
        <!-- Header Section -->
        <div class="bg-blue-500 text-white p-6 rounded">
        <h1 class="text-2xl font-bold mb-2">Booking Hotel & Penginapan Murah dengan Harga Promo</h1>
        <p>Temukan harga terbaik untuk setiap produk Travelin yang Anda butuhkan.</p>
        </div>

        <!-- Booking Form -->
        <div class="bg-white p-6 shadow-lg rounded mt-6">
        <h2 class="text-xl font-bold mb-4">Cari Hotel</h2>

        <form class="space-y-4" action="{{ route('hotels.search') }}" method="GET">
        <div>
            <label for="query" class="block text-gray-700 font-semibold mb-2">Kota, tujuan, atau nama hotel</label>
            <input name="location" value="{{ request()->get('location') }}" id="query" type="text" class="w-full p-3 border rounded" placeholder="Kota, hotel, tempat wisata" required>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="check_in" class="block text-gray-700 font-semibold mb-2">Check-in</label>
                <input name="check_in" id="check_in" type="date" class="w-full p-3 border rounded" required>
            </div>
            <div>
                <label for="check_out" class="block text-gray-700 font-semibold mb-2">Check-out</label>
                <input type="date" class="w-full p-3 border rounded" name="check_out" id="check_out" required>
            </div>
        </div>


        <button type="submit" class="w-full bg-orange-500 text-white p-3 rounded font-bold">Cari Hotel</button>
    </form>

        </div>

        <!-- Promo Section -->
        <div class="mt-6 py-8">
        <div class="bg-red-500 text-white p-6 rounded">
            <h2 class="text-xl font-bold">12.12 FLASH SALE</h2>
            <p>Diskon hingga 50% | Kupon s.d. Rp2 Jt</p>
            <p class="mt-2">Scan QR di aplikasi untuk informasi lebih lanjut.</p>
        </div>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 py-12">
            <!-- Promo and Newsletter -->
            <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start space-y-6 lg:space-y-0">
                <!-- Promo Section -->
                <div class="text-center lg:text-left lg:w-1/3">
                    <h2 class="text-xl font-bold mb-4">
                        Dapatkan info terbaru seputar tips perjalanan, rekomendasi, serta promo.
                    </h2>
                    <div class="flex items-center justify-center lg:justify-start space-x-4">
                        <input type="email" placeholder="Alamat emailmu"
                            class="p-2 rounded-lg w-2/3 lg:w-1/2 text-gray-800">
                        <button class="bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg text-white">
                            Berlangganan
                        </button>
                    </div>
                    <div class="mt-4 flex justify-center lg:justify-start space-x-4">
                        <img src="/images/image6.svg" alt="Google Play" class="w-32">
                        <img src="/images/image7.svg" alt="App Store" class="w-32">
                    </div>
                </div>

                <!-- Payment Partners -->
                <div class="text-center lg:text-left lg:w-1/3">
                    <h3 class="text-lg font-bold mb-4">Partner Pembayaran</h3>
                    <div class="grid grid-cols-4 gap-4">
                        <img src="/images/bca.webp" alt="BCA" class="mx-auto">
                        <img src="/images/mandiri.webp" alt="Mandiri" class="mx-auto">
                        <img src="/images/bni.webp" alt="BNI" class="mx-auto">
                        <img src="/images/bri.webp" alt="BRI" class="mx-auto">
                        <img src="/images/alfa.webp" alt="VISA" class="mx-auto">
                        <img src="/images/indomaret.webp" alt="MasterCard" class="mx-auto">
                        <img src="/images/dana.png" alt="Alfamart" class="mx-auto size-4/5">
                        <img src="/images/atm.webp" alt="DANA" class="mx-auto">
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="lg:w-1/3">
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-bold mb-4">Tentang Travelin</h4>
                            <ul class="space-y-2 text-sm">
                                <li><a href="#" class="hover:underline">Cara Pesan</a></li>
                                <li><a href="#" class="hover:underline">Hubungi Kami</a></li>
                                <li><a href="#" class="hover:underline">Pusat Bantuan</a></li>
                                <li><a href="#" class="hover:underline">Karier</a></li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-bold mb-4">Produk</h4>
                            <ul class="space-y-2 text-sm">
                                <li><a href="#" class="hover:underline">Hotel</a></li>
                                <li><a href="#" class="hover:underline">Tiket Pesawat</a></li>
                                <li><a href="#" class="hover:underline">Rental Mobil</a></li>
                                <li><a href="#" class="hover:underline">Xperience</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="mt-12 border-t border-gray-700 pt-6 text-center lg:text-left">
                <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start">
                    <p class="text-sm">&copy; 2024 Travelin. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 lg:mt-0">
                        <a href="#" class="hover:underline">Facebook</a>
                        <a href="#" class="hover:underline">Instagram</a>
                        <a href="#" class="hover:underline">Twitter</a>
                        <a href="#" class="hover:underline">YouTube</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </body>
