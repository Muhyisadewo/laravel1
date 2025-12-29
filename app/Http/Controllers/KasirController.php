<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        // Data sementara (BELUM database)
        $namaKasir = 'hyee';
        $tanggal = date('d-m-Y');

        return view('kasir.index', compact('namaKasir', 'tanggal'));
    }
}
