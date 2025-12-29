<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function awal()
    {
        $date = date('d-m-Y');
        $totalPenjualan = 1500000; // Contoh data produk
        return view('awal', compact('date'), ['totalPenjualan' => $totalPenjualan]);
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function kontak()
    {
        return view('kontak');
    }
}

