<?php

// app/Http/Controllers/HotelController.php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Reservation;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function search(Request $request)
    {
        // Validasi input pencarian
        $request->validate([
            'location' => 'nullable|string|max:255',
            'check_in' => 'nullable|date',
            'check_out' => 'nullable|date',
            'rooms' => 'nullable|integer|min:1',
            'sort_by_location' => 'nullable|in:asc,desc', // Validasi untuk sorting lokasi
        ]);
    
        // Mengambil input pencarian
        $query = Hotel::query();
    
        // Filter berdasarkan lokasi
        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->input('location') . '%');
        }
    
        // Menyaring hotel berdasarkan ketersediaan (misalnya hanya hotel yang tersedia)
        if ($request->filled('check_in')) {
            $query->where('available', true); // Misalnya hanya hotel yang tersedia
        }
    
        // Menambahkan sorting berdasarkan lokasi
        if ($request->filled('sort_by_location')) {
            $query->orderBy('location', $request->input('sort_by_location')); // 'asc' atau 'desc'
        }
    
        // Menyaring hotel berdasarkan kriteria yang dimasukkan
        $hotels = $query->get();
    
        // Mengirim data hotel ke view
        return view('hotels.results', compact('hotels'));
    }
        // Menampilkan halaman detail hotel
        public function show($id)
        {
            $hotel = Hotel::findOrFail($id);
            return view('hotels.details', compact('hotel'));
        }

        // Menampilkan halaman pemesanan hotel
        public function booking($id)
        {
            $hotel = Hotel::findOrFail($id);
            return view('hotels.booking', compact('hotel'));
        }

        // Menangani penyimpanan pemesanan
        public function reserve(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'rooms' => 'required|integer|min:1',
        ]);

        // Membuat reservasi baru
        $reservation = new Reservation();
        $reservation->hotel_id = $hotel->id;
        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->check_in = $request->check_in;
        $reservation->check_out = $request->check_out;
        $reservation->rooms = $request->rooms;
        $reservation->total_price = $hotel->price * $request->rooms;
        $reservation->status = 'Pending'; // Status awal pemesanan
        $reservation->save();

        // Arahkan pengguna ke halaman pembayaran dengan mengirimkan ID pemesanan
        return redirect()->route('payment', ['id' => $reservation->id]);
    }   

        public function payment($id)
        {
            $reservation = Reservation::findOrFail($id);
            return view('hotels.payment', compact('reservation'));
        }
        // Proses pembayaran
    public function pay(Request $request, $id)
    {
        // Cari pemesanan berdasarkan ID
        $reservation = Reservation::findOrFail($id);

        // Validasi input dari form pembayaran
        $request->validate([
            'payment_method' => 'required|string',
            'payment_status' => 'required|string',
        ]);

        // Simpan status pembayaran ke database
        $reservation->payment_method = $request->payment_method;
        $reservation->payment_status = $request->payment_status;
        $reservation->save();

        // Proses pembayaran dengan integrasi gateway
        if ($request->payment_status == 'paid') {
            // Logika untuk mengonfirmasi pembayaran misalnya dengan API pembayaran atau sistem lainnya
            // Misalnya, Anda bisa mengintegrasikan dengan API pembayaran seperti Stripe, PayPal, atau lainnya
        }

        // Arahkan ke halaman konfirmasi atau status pembayaran
        return redirect()->route('payment.success', ['id' => $reservation->id]);
    }

    // Halaman konfirmasi pembayaran berhasil
    public function paymentSuccess($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('hotels.payment_success', compact('reservation'));
    }

}