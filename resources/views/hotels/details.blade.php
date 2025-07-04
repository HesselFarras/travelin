<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- CDN Tailwind CSS -->
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 py-4">
        <div class="container mx-auto flex justify-between items-center text-white">
            <a href="/" class="text-xl font-bold">Travelin</a>
        </div>
    </nav>

    <!-- Hotel Detail -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">{{ $hotel->hotel_name }}</h1>
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <p><strong>Lokasi:</strong> {{ $hotel->location }}</p>
            <p><strong>Deskripsi:</strong> {{ $hotel->description }}</p>
            <p><strong>Rating:</strong> {{ $hotel->rating }} <span class="text-yellow-500">★</span></p>
            <p><strong>Harga:</strong> Rp {{ number_format($hotel->price, 2, ',', '.') }}</p>
            <p><strong>Tersedia:</strong> {{ $hotel->available ? 'Ya' : 'Tidak' }}</p>
        </div>

        <!-- Form Pemesanan -->
        <div class="mt-6">
            <a href="{{ route('hotel.booking', $hotel->id) }}" class="px-6 py-3 bg-yellow-400 text-white rounded hover:bg-yellow-500">
                Pesan Sekarang
            </a>
        </div>
    </div>

</body>
</html>
