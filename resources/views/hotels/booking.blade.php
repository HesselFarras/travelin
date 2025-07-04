<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 py-4">
        <div class="container mx-auto flex justify-between items-center text-white">
            <a href="/" class="text-xl font-bold">Travelin</a>
        </div>
    </nav>

    <!-- Detail Hotel -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">{{ $hotel->hotel_name }}</h1>
        <div class="flex justify-between items-center">
            <div class="w-1/2">
                <img src="/images/lesemar.jpg" alt="Hotel Image" class="w-full h-64 object-cover rounded-lg">
            </div>
            <div class="w-1/2 pl-6">
                <p class="text-gray-700">{{ $hotel->description }}</p>
                <p class="mt-4 text-yellow-500">{{ $hotel->rating }} ★</p>
                <p class="mt-4 text-xl font-semibold">Rp {{ number_format($hotel->price, 2, ',', '.') }} per malam</p>
            </div>
        </div>

        <form action="{{ route('hotel.reserve', $hotel->id) }}" method="POST" class="mt-6 bg-white p-6 rounded-lg shadow-lg">
            @csrf
            <h3 class="text-2xl font-semibold mb-4">Pemesanan</h3>
            
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Nama</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg mt-2" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg mt-2" required>
            </div>

            <div class="mb-4">
                <label for="check_in" class="block text-sm font-medium text-gray-600">Check-in</label>
                <input type="date" name="check_in" id="check_in" class="w-full px-4 py-2 border rounded-lg mt-2" required>
            </div>

            <div class="mb-4">
                <label for="check_out" class="block text-sm font-medium text-gray-600">Check-out</label>
                <input type="date" name="check_out" id="check_out" class="w-full px-4 py-2 border rounded-lg mt-2" required>
            </div>

            <div class="mb-4">
                <label for="rooms" class="block text-sm font-medium text-gray-600">Jumlah Kamar</label>
                <input type="number" name="rooms" id="rooms" min="1" class="w-full px-4 py-2 border rounded-lg mt-2" required>
            </div>

            <button type="submit" class="w-full py-3 bg-yellow-400 text-white font-semibold rounded-lg hover:bg-yellow-500">Pesan Hotel</button>
        </form>
    </div>

</body>
</html>
