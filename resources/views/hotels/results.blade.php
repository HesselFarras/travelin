<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- CDN Tailwind CSS -->
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 py-4">
        <div class="container mx-auto flex justify-between items-center text-white">
            <a href="/" class="text-xl font-bold">Travelin</a>
        </div>
    </nav>

    <!-- Form Pencarian Hotel -->
    <div class="container mx-auto px-4 py-8">
        <form action="{{ route('hotels.search') }}" method="GET" class="flex justify-between items-center">
            <div class="w-1/3">
                <input 
                    type="text" 
                    name="location" 
                    placeholder="Masukkan Lokasi..." 
                    class="w-full px-4 py-2 border rounded-lg"
                    value="{{ request()->get('location') }}"
                />
            </div>

            <!-- Dropdown untuk sorting berdasarkan lokasi -->
            <div class="w-1/3">
                <select name="sort_by_location" class="w-full px-4 py-2 border rounded-lg">
                    <option value="">Sortir berdasarkan lokasi</option>
                    <option value="asc" {{ request()->get('sort_by_location') == 'asc' ? 'selected' : '' }}>A-Z</option>
                    <option value="desc" {{ request()->get('sort_by_location') == 'desc' ? 'selected' : '' }}>Z-A</option>
                </select>
            </div>

            <button type="submit" class="ml-4 px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Cari
            </button>
        </form>
    </div>

    <!-- Hasil Pencarian Hotel -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Hasil Pencarian Hotel</h1>

        @if($hotels->isEmpty())
            <p class="text-center text-lg text-gray-600">Tidak ada hotel yang ditemukan untuk pencarian Anda.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($hotels as $hotel)
                    <div class="bg-white p-4 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-blue-600">{{ $hotel->hotel_name }}</h3>
                        <p class="text-sm text-gray-600">{{ $hotel->location }}</p>
                        <p class="mt-2 text-gray-500">{{ Str::limit($hotel->description, 100) }}</p>
                        <p class="mt-2 text-yellow-500">{{ $hotel->rating }} ★</p>
                        <p class="mt-2 font-semibold">Rp {{ number_format($hotel->price, 2, ',', '.') }}</p>
                        <a href="{{ route('hotel.details', $hotel->id) }}" class="mt-4 block bg-blue-600 text-white text-center py-2 rounded-lg hover:bg-blue-700">Lihat Detail</a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

</body>
</html>
