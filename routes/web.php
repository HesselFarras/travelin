<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\FlightSearchController;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;

Route::get('/profile', [ProdukController::class, 'index']);

Route::get('/search-hotels', [HotelController::class, 'search'])->name('hotels.search');
// Route::get('/hotels/details/{id}', [HotelController::class, 'show'])->name('hotel.details');
Route::get('/hotels/booking/{id}', [HotelController::class, 'booking'])->name('hotel.booking');
Route::post('/hotels/booking/{id}', [HotelController::class, 'storeBooking'])->name('hotel.storeBooking');


// Menampilkan daftar hotel (jika ada halaman daftar hotel)
Route::get('/hotels', [HotelController::class, 'index'])->name('hotel.index');

// Menampilkan detail hotel
Route::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotel.details');

// Menangani pemesanan hotel
Route::post('/hotels/{id}/reserve', [HotelController::class, 'reserve'])->name('hotel.reserve');

// Menampilkan halaman pembayaran
Route::get('/payment/{id}', [HotelController::class, 'payment'])->name('payment');

// Menangani pembayaran
Route::post('/payment/{id}', [HotelController::class, 'pay'])->name('pay');

Route::get('payment/success/{id}', [HotelController::class, 'paymentSuccess'])->name('payment.success');

// End Hotel Route


Route::prefix('flights')->group(function () {
    Route::get('/flights', [FlightSearchController::class, 'index'])->name('flights.index');
    Route::get('/flights/results', [FlightSearchController::class, 'results'])->name('flights.results');
    Route::post('/flights/{id}/booking/confirm', [FlightSearchController::class, 'confirmBooking'])->name('flights.confirm_booking');
    Route::get('/', [FlightSearchController::class, 'index'])->name('flights.index'); // Halaman pencarian
    Route::get('/flights/{id}', [FlightSearchController::class, 'showDetails'])->name('flights.details');
    Route::get('/{id}/booking', [FlightSearchController::class, 'booking'])->name('flights.booking'); // Form pemesanan
    Route::post('/{id}/payment', [FlightSearchController::class, 'payment'])->name('flights.payment'); // Ringkasan pembayaran
    Route::get('/payment/success', [FlightSearchController::class, 'paymentSuccess'])->name('flights.payment.success');
    Route::get('/flights/payment-success', [FlightSearchController::class, 'paymentSuccess'])->name('flights.payment.success');
    Route::get('/flights/{id}/payment', [FlightSearchController::class, 'payment'])->name('flights.payment');
    Route::get('/flights/{id}/booking', [FlightSearchController::class, 'booking'])->name('flights.booking');

    // Route untuk konfirmasi booking
    Route::post('/flights/{id}/booking/confirm', [FlightSearchController::class, 'confirmBooking'])->name('flights.confirm_booking');

    // Route untuk halaman pembayaran
    Route::get('/flights/{id}/payment', [FlightSearchController::class, 'payment'])->name('flights.payment');

    // Route untuk sukses pembayaran
    Route::get('/flights/payment/success/{id}', [FlightSearchController::class, 'paymentSuccessPage'])->name('flights.payment_success');
    Route::get('/flights/payment/success/{id}', [FlightSearchController::class, 'paymentSuccessPage'])->name('flights.payment_success');

// Route untuk halaman sukses pembayaran
    Route::get('/flights/payment/success/{id}', [FlightSearchController::class, 'paymentSuccessPage'])->name('flights.payment_success');

    Route::post('/flights/{id}/payment/success', [FlightSearchController::class, 'paymentSuccess'])->name('flights.payment_success');
    Route::get('/flights/{id}/booking', [FlightSearchController::class, 'booking'])->name('flights.booking');
    Route::post('/flights/{id}/payment', [FlightSearchController::class, 'payment'])->name('flights.payment');
    Route::post('/flights/{id}/payment/success', [FlightSearchController::class, 'paymentSuccess'])->name('flights.payment.success');
    Route::get('/flights/{id}/payment/success', [FlightSearchController::class, 'paymentSuccessPage'])->name('flights.payment.success.page');
    // Konfirmasi pembayaran
    Route::get('/{id}/payment', [FlightSearchController::class, 'payment'])->name('flights.payment'); // Halaman untuk pembayaran
    Route::post('/{id}/payment', [FlightSearchController::class, 'payment'])->name('flights.payment'); // Proses pembayaran
    Route::get('/flights/{id}/payment', [FlightSearchController::class, 'payment'])->name('flights.payment');

// Rute untuk memproses pembayaran dan mengarahkan ke halaman sukses
Route::post('/flights/{id}/payment', [FlightSearchController::class, 'processPayment'])->name('flights.process_payment');

// Rute untuk menampilkan halaman sukses pembayaran
Route::get('/flights/{id}/payment/success', [FlightSearchController::class, 'paymentSuccessPage'])->name('flights.payment_success');
    // Rute untuk sukses pembayaran
    Route::get('/{id}/payment/success', [FlightSearchController::class, 'paymentSuccessPage'])->name('flights.payment_success'); // Halaman sukses pembayaran
});



Route::get('/', [WelcomeController::class, 'index']);

Route::get('/hotel', function(){
    return view('hotel');
});

Route::get('/pesawat', function(){
    return view('pesawat');
});

Route::get('/kereta', function(){
    return view('kereta');
});

Route::get('/bus', function(){
    return view('bus');
});

Route::get('/antar', function(){
    return view('antar');
});

Route::get('/rental', function(){
    return view('rental');
});

Route::get('/profile', function(){
    $produks = Produk::all();
    return view('profile', compact('produks'));
});