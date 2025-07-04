<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Pembayaran Tiket Pesawat Berhasil</h1>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Terima Kasih, Pembayaran Anda Telah Berhasil</h2>

            <p><strong>Nama Pemesan:</strong> {{ $flight->booking->passenger_name }}</p>
            <p><strong>Tujuan:</strong> {{ $flight->origin }} - {{ $flight->destination }}</p>
            <p><strong>Tanggal Keberangkatan:</strong> {{ \Carbon\Carbon::parse($flight->departure_time)->format('d M Y') }}</p>
            <p><strong>Total Harga:</strong> Rp {{ number_format($flight->booking->total_price, 2, ',', '.') }}</p>

            <a href="{{ route('flights.index') }}" class="mt-4 inline-block px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700">
                Kembali ke Halaman Utama
            </a>
        </div>
    </div>

</body>
</html>
