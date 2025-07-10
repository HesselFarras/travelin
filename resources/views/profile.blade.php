
    <title>Platform Perjalanan Asia Pacific</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
    <body class="bg-gray-100">
    <!-- Header Section -->
    <section class="relative bg-cover bg-center h-[300px]" style="background-image: url('https://cdn1-production-images-kly.akamaized.net/n62CNoCUKC31_0cYy2V31aP6dOY=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1918174/original/079414300_1519122999-WhatsApp_Image_2018-02-20_at_5.25.35_PM.jpeg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h1 class="text-3xl font-bold md:text-4xl">Platform Perjalanan Terdepan di Asia Pacific</h1>
        <p class="mt-4 text-lg">Kami memungkinkan para traveler untuk mengakses beragam produk perjalanan – semua tersedia di aplikasi dan website Travelin.</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Image -->
            <div>
            <img src="/images/selpiramean.jpg" alt="Travelers on the Beach" class="rounded-lg shadow-md">
            </div>
            <!-- Text -->
            <div>
            <h2 class="text-2xl font-bold text-gray-800">Travelin</h2>
            <p class="mt-4 text-gray-600 leading-relaxed">
                Travelin adalah platform perjalanan terdepan di Asia Pacific, menawarkan konsumen kemudahan untuk menjelajah, memesan, dan menikmati berbagai produk perjalanan. 
                Dengan pilihan transportasi yang ekstensif, mulai dari penerbangan, bus, kereta api, sewa mobil, hingga transfer bandara, Travelin juga menyediakan berbagai opsi akomodasi, 
                seperti hotel, apartemen, resor, dan lainnya. Selain itu, pengguna dapat semakin meningkatkan perjalanan mereka dengan paket kapal pesiar serta akses ke berbagai atraksi lokal 
                seperti taman hiburan, tur harian, dan banyak lagi.
            </p>
            <p class="py-4">
            <span class="font-bold text-xl">Visi</span>
            Menjadi mitra perjalanan terbaik yang menginspirasi orang untuk menjelajahi dunia dengan kemudahan, kenyamanan, dan kepercayaan.
            </p>
            <p>
            <span class="font-bold text-xl">Misi</span>
            Menyediakan solusi perjalanan yang mudah diakses
            Menawarkan pengalaman personalisasi
            Membangun hubungan jangka panjang dengan pelanggan
            Memanfaatkan teknologi untuk inovasi
            Mengembangkan jejaring mitra terpercaya
            Meningkatkan kesadaran wisata berkelanjutan
            </p>
            </div>
        </div>
        </div>
    </section>
    </body>
    <div class="container mx-auto py-8">
    <h2 class="text-2xl font-bold text-center mb-6">Produk Kami</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- @foreach ($produks as $produk) -->
        <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 p-6">
            <!-- Nama Produk -->
            <!-- <h5 class="text-xl font-bold text-gray-800 mb-2">{{ $produk->nama }}</h5> -->
            
            <!-- Deskripsi Produk -->
            <!-- <p class="text-primary font-bold text-4xl text-blue-600">{{ $produk->quantity }}+</p> -->
            
            <!-- Harga Produk -->
            <span class="text-lg font-semibold text-gray-600 mb-4">
            <!-- {{ $produk->description }} -->
            </span>
        </div>
        <!-- @endforeach -->
    </div>
</div>
    
    </html>
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
