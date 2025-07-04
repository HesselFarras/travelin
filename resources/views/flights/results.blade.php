<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Tiket Pesawat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 py-4">
        <div class="container mx-auto flex justify-between items-center text-white">
            <a href="/" class="text-xl font-bold">Travelin</a>
        </div>
    </nav>

    <!-- Hasil Pencarian Tiket Pesawat -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Hasil Pencarian Tiket Pesawat</h1>

        @if($flights->isEmpty())
            <p class="text-center text-lg text-gray-600">Tidak ada tiket yang ditemukan untuk pencarian Anda.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($flights as $flight)
                    <div class="bg-white p-4 rounded-lg shadow-lg">
                        <h3 class="text-lg font-semibold text-blue-600">{{ $flight->flight_number }}</h3>
                        <div class="mt-2 text-sm">
                            <p class="text-gray-500">Asal: <span class="text-gray-700">{{ $flight->origin }}</span></p>
                            <p class="text-gray-500">Tujuan: <span class="text-gray-700">{{ $flight->destination }}</span></p>
                            <p class="text-gray-500">Keberangkatan: <span class="text-gray-700">{{ $flight->departure_time }}</span></p>
                            <p class="text-gray-500">Kedatangan: <span class="text-gray-700">{{ $flight->arrival_time }}</span></p>
                        </div>
                        <p class="mt-2 font-semibold text-gray-700">Rp {{ number_format($flight->price, 2, ',', '.') }}</p>
                        <a href="{{ route('flights.details', $flight->id) }}" class="mt-4 block bg-blue-600 text-white text-center py-2 rounded-lg hover:bg-blue-700">Lihat Detail</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

</body>
</html>
