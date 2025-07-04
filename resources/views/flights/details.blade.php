<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tiket Pesawat</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- CDN Tailwind CSS -->
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 py-4">
        <div class="container mx-auto flex justify-between items-center text-white">
            <a href="/" class="text-xl font-bold">Travelin</a>
        </div>
    </nav>

    <!-- Ticket Detail -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Detail Tiket Penerbangan</h1>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <p><strong>Nomor Penerbangan:</strong> {{ $flight->flight_number }}</p>
            <p><strong>Asal:</strong> {{ $flight->origin }}</p>
            <p><strong>Tujuan:</strong> {{ $flight->destination }}</p>
            <p><strong>Waktu Keberangkatan:</strong> {{ $flight->departure_time }}</p>
            <p><strong>Waktu Kedatangan:</strong> {{ $flight->arrival_time }}</p>
            <p><strong>Harga:</strong> Rp {{ number_format($flight->price, 2, ',', '.') }}</p>
            <p><strong>Kursi Tersedia:</strong> {{ $flight->available_seats }}</p>
        </div>

        <!-- Form Pemesanan -->
        <div class="mt-6">
            <a href="{{ route('flights.booking', $flight->id) }}" class="px-6 py-3 bg-yellow-400 text-white rounded hover:bg-yellow-500">
                Pesan Sekarang
            </a>
        </div>
    </div>

</body>
</html>
