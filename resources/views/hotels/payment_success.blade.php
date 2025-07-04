<title>Pembayaran Berhasil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 py-4">
        <div class="container mx-auto flex justify-between items-center text-white">
            <a href="/" class="text-xl font-bold">Travelin</a>
        </div>
    </nav>

    <!-- Pembayaran Berhasil -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-green-600">Pembayaran Berhasil!</h1>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Detail Pemesanan</h2>

            <p><strong>Nama:</strong> {{ $reservation->name }}</p>
            <p><strong>Email:</strong> {{ $reservation->email }}</p>
            <p><strong>Hotel:</strong> {{ $reservation->hotel->hotel_name }}</p>
            <p><strong>Tanggal Check-in:</strong> {{ $reservation->check_in }}</p>
            <p><strong>Tanggal Check-out:</strong> {{ $reservation->check_out }}</p>
            <p><strong>Jumlah Kamar:</strong> {{ $reservation->rooms }}</p>
            <p><strong>Total Harga:</strong> Rp {{ number_format($reservation->total_price, 2, ',', '.') }}</p>

            <p class="mt-4 text-green-600 font-bold">Pembayaran Anda telah berhasil diproses.</p>
        </div>
    </div>

</body>
</html>