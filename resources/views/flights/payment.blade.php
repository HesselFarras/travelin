<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Tiket Pesawat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 py-4">
        <div class="container mx-auto flex justify-between items-center text-white">
            <a href="/" class="text-xl font-bold">Travelin</a>
        </div>
    </nav>

    <!-- Pembayaran Form -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Pembayaran Tiket Pesawat</h1>

        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Detail Pemesanan</h2>

            <!-- Informasi Pemesanan -->
            <p><strong>Nama Pemesan:</strong> {{ $booking->passenger_name }}</p>
            <p><strong>Tujuan:</strong> {{ $flight->origin }} - {{ $flight->destination }}</p>
            <p><strong>Tanggal Keberangkatan:</strong> {{ \Carbon\Carbon::parse($flight->departure_time)->format('d M Y') }}</p>
            <p><strong>Total Harga:</strong> Rp {{ number_format($booking->total_price, 2, ',', '.') }}</p>

            <!-- Form Pembayaran -->
            <form action="{{ route('flights.payment_success', $flight->id) }}" method="POST" class="mt-6">
                @csrf
                <div class="mb-4">
                    <label for="payment_method" class="block text-sm font-medium text-gray-600">Metode Pembayaran</label>
                    <select name="payment_method" id="payment_method" class="w-full px-4 py-2 border rounded-lg mt-2" required>
                        <option value="credit_card">Kartu Kredit</option>
                        <option value="bank_transfer">Transfer Bank</option>
                        <option value="paypal">PayPal</option>
                    </select>
                </div>

                <!-- Detil Metode Pembayaran -->
                <div class="mb-4" id="credit_card_details" style="display: none;">
                    <label for="credit_card_number" class="block text-sm font-medium text-gray-600">Nomor Kartu Kredit</label>
                    <input type="text" name="credit_card_number" id="credit_card_number" class="w-full px-4 py-2 border rounded-lg mt-2" placeholder="Masukkan nomor kartu kredit">
                </div>

                <div class="mb-4" id="bank_transfer_details" style="display: none;">
                    <label for="bank_account" class="block text-sm font-medium text-gray-600">Rekening Bank</label>
                    <input type="text" name="bank_account" id="bank_account" class="w-full px-4 py-2 border rounded-lg mt-2" placeholder="Masukkan nomor rekening bank">
                </div>

                <div class="mb-4">
                    <label for="payment_status" class="block text-sm font-medium text-gray-600">Status Pembayaran</label>
                    <select name="payment_status" id="payment_status" class="w-full px-4 py-2 border rounded-lg mt-2" required>
                        <option value="paid">Sudah Dibayar</option>
                        <option value="unpaid">Belum Dibayar</option>
                    </select>
                </div>

                <!-- Tombol untuk melanjutkan pembayaran -->
                <button type="submit" class="w-full py-3 bg-yellow-400 text-white font-semibold rounded-lg hover:bg-yellow-500">Proses Pembayaran</button>
            </form>
        </div>
    </div>

    <!-- Script untuk menampilkan input sesuai metode pembayaran -->
    <script>
        document.getElementById('payment_method').addEventListener('change', function() {
            var method = this.value;
            var creditCardDetails = document.getElementById('credit_card_details');
            var bankTransferDetails = document.getElementById('bank_transfer_details');

            // Pastikan kedua input disembunyikan jika metode lain dipilih
            creditCardDetails.style.display = 'none';
            bankTransferDetails.style.display = 'none';

            // Tampilkan sesuai dengan pilihan metode pembayaran
            if (method === 'credit_card') {
                creditCardDetails.style.display = 'block';
            } else if (method === 'bank_transfer') {
                bankTransferDetails.style.display = 'block';
            }
        });
    </script>

</body>
</html>