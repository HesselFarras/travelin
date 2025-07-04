<header id="navbar" class="sticky top-0 left-0 w-full flex items-center bg-gradient-to-b from-orange-400 to-pink-500 transition-all duration-300 z-50">
    <div class="container mx-auto py-2">
        <div class="mx-auto flex items-center justify-between ">
            <!-- Logo -->
            <div class="font-xl flex items-center space-x-2 ms-32">
                <img src="/images/travelin.png" alt="Logo" class="w-12 h-12">
                <span class="font-bold text-3xl">travelin</span>
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


<script>
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        navbar.classList.remove('bg-gradient-to-b', 'from-orange-400', 'to-pink-500');
        navbar.classList.add('bg-slate-200', 'text-black', 'shadow-lg');
    } else {
        navbar.classList.remove('bg-slate-200', 'text-black', 'shadow-lg');
        navbar.classList.add('bg-gradient-to-b', 'from-orange-400', 'to-pink-500');
    }
    });
</script>