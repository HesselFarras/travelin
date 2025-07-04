<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Booking;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;

class FlightSearchController extends Controller
{
    public function index()
    {
        return view('flights.index'); // Form pencarian tiket
    }

    public function results(Request $request)
    {
        // Mendapatkan data dari input form
        $origin = $request->input('origin');
        $destination = $request->input('destination');
        $departure_date = $request->input('departure_date');
        $passengers = $request->input('passengers');

        // Melakukan pencarian berdasarkan input dari form
        $flights = Flight::where('origin', $origin)
            ->where('destination', $destination)
            ->whereDate('departure_time', $departure_date)
            ->get();

        // Mengembalikan hasil pencarian ke view
        return view('flights.results', compact('flights'));
    }
    public function showDetails($id)
    {
        // Find the flight by its ID
        $flight = Flight::findOrFail($id);
    
        // Return the view with the flight details
        return view('flights.details', compact('flight'));
    }


    public function confirmBooking(Request $request, $id)
    {
        $flight = Flight::findOrFail($id);
    
        $booking = new Booking();
        $booking->flight_id = $flight->id;
        $booking->passenger_name = $request->passenger_name;
        // Hapus payment_method jika tidak ingin disimpan
        // $booking->payment_method = $request->payment_method;
        $booking->save();
    
        return redirect()->route('flights.payment', $flight->id)->with('success', 'Booking berhasil! Silakan lanjutkan ke pembayaran.');
    }

    public function booking($id)
    {
        $flight = Flight::findOrFail($id);
        return view('flights.booking', compact('flight'));
    }
    
    public function payment($id)
    {
        // Cari penerbangan berdasarkan ID
        $flight = Flight::findOrFail($id);
    
        // Ambil data booking berdasarkan penerbangan
        $booking = Booking::where('flight_id', $flight->id)->latest()->first();
    
        // Tampilkan halaman pembayaran dengan data booking dan penerbangan
        return view('flights.payment', compact('flight', 'booking'));
    }

        public function processPayment(Request $request, $id)
    {
        // Ambil data penerbangan berdasarkan ID
        $flight = Flight::findOrFail($id);

        // Ambil data pemesanan berdasarkan flight_id
        $booking = Booking::where('flight_id', $flight->id)->first();

        // Simulasikan proses pembayaran
        // Anda dapat menambahkan logika lain untuk proses pembayaran seperti validasi, integrasi dengan gateway, dll.
        $booking->payment_status = 'paid';
        $booking->payment_method = $request->input('payment_method');
        $booking->save();

        // Setelah pembayaran berhasil, arahkan ke halaman sukses
        return redirect()->route('flights.payment_success', $flight->id);
    }
    
    public function paymentSuccess(Request $request, $id)
    {
        // Proses pembayaran berhasil
        $flight = Flight::findOrFail($id);
    
        // Update status pembayaran di booking
        $booking = Booking::where('flight_id', $id)->first();
        $booking->payment_method = $request->payment_method;
        $booking->payment_status = 'paid';
        $booking->save();
    
        // Redirect ke halaman sukses pembayaran (menggunakan GET)
        return redirect()->route('flights.payment_success', $id);
    }
    
    public function paymentSuccessPage($id)
    {
        // Ambil data penerbangan berdasarkan ID
        $flight = Flight::findOrFail($id);
    
        // Kirim data ke halaman sukses pembayaran
        return view('flights.payment_success', compact('flight'));
    }
    

}