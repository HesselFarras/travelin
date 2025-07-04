<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-blue-600 py-4">
        <div class="container mx-auto flex justify-between items-center text-white">
            <a href="/" class="text-xl font-bold">Travelin</a>
        </div>
    </nav>

    <!-- Pembayaran -->
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6 text-center text-blue-600">Pembayaran Pemesanan</h1>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Detail Pemesanan</h2>

            <p><strong>Nama:</strong> {{ $reservation->name }}</p>
            <p><strong>Email:</strong> {{ $reservation->email }}</p>
            <p><strong>Hotel:</strong> {{ $reservation->hotel->hotel_name }}</p>
            <p><strong>Tanggal Check-in:</strong> {{ $reservation->check_in }}</p>
            <p><strong>Tanggal Check-out:</strong> {{ $reservation->check_out }}</p>
            <p><strong>Jumlah Kamar:</strong> {{ $reservation->rooms }}</p>
            <p><strong>Total Harga:</strong> Rp {{ number_format($reservation->total_price, 2, ',', '.') }}</p>

            <form action="{{ route('pay', $reservation->id) }}" method="POST" class="mt-6">
                @csrf
                <div class="mb-4">
                    <label for="payment_method" class="block text-sm font-medium text-gray-600">Metode Pembayaran</label>
                    <select name="payment_method" id="payment_method" class="w-full px-4 py-2 border rounded-lg mt-2" required>
                        <option value="credit_card">Kartu Kredit</option>
                        <option value="bank_transfer">Transfer Bank</option>
                        <option value="paypal">PayPal</option>
                    </select>
                </div>

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


                <button type="submit" class="w-full py-3 bg-yellow-400 text-white font-semibold rounded-lg hover:bg-yellow-500">Proses Pembayaran</button>
            </form>
        </div>
    </div>

</body>
</html>
