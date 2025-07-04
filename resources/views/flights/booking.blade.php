<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Tiket Pesawat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 py-4">
        <div class="container mx-auto flex justify-between items-center text-white">
            <a href="/" class="text-xl font-bold">Travelin</a>
        </div>
    </nav>

    <!-- Booking Form -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Booking Tiket Pesawat</h1>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Detail Pemesanan</h2>

            <p><strong>Nama Pemesan:</strong></p>
            <form action="{{ route('flights.confirm_booking', $flight->id) }}" method="POST">
                @csrf
                <!-- Input Nama Pemesan -->
                <div class="mb-4">
                    <label for="passenger_name" class="block text-sm font-medium text-gray-600">Nama </label>
                    <input type="text" name="passenger_name" id="passenger_name" class="w-full px-4 py-2 border rounded-lg mt-2" required placeholder="Masukkan Nama Pemesan">
                </div>

                <p><strong>Tujuan:</strong> {{ $flight->origin }} - {{ $flight->destination }}</p>
                <p><strong>Tanggal Keberangkatan:</strong> {{ \Carbon\Carbon::parse($flight->departure_time)->format('d M Y') }}</p>

                <!-- Mengambil harga tiket langsung dari flight model -->
                <p><strong>Total Harga:</strong> Rp {{ number_format($flight->price, 2, ',', '.') }}</p>

                <button type="submit" class="w-full py-3 bg-yellow-400 text-white font-semibold rounded-lg hover:bg-yellow-500 mt-6">Lanjutkan ke Pembayaran</button>
            </form>
        </div>
    </div>

</body>

</html>
