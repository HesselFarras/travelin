<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // Menampilkan halaman welcome (halaman utama)
    public function index()
    {
        return view('welcome');
    }
}
