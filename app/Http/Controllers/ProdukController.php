<?php

namespace App\Http\Controllers;

use App\Models\Produk; // Impor model Produk
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Menampilkan daftar produk.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $produks = Produk::all();
        
        // Debugging: Cek apakah data produk ada
        dd($produks);
        
        return view('profile', compact('produks'));
    }
}
