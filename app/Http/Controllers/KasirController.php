<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class KasirController extends Controller
{
    public function index()
    {
        // Data sementara (BELUM database)
        $namaKasir = 'Hyee';
        Carbon::setLocale('id');
        $tanggal = now()->translatedFormat('D, d M Y H:i');
        $cart = session()->get('cart', []);

        return view('kasir.index', compact('namaKasir', 'tanggal', 'cart'));
    }

    public function tambah(Request $request)
        {
            $cart = session()->get('cart', []);

            $id = $request->id;

            if (isset($cart[$id])) {
                $cart[$id]['qty'] += 1;
            } else {
                $cart[$id] = [
                    'nama'  => $request->nama,
                    'harga' => $request->harga,
                    'qty'   => 1,
                ];
            }

            session()->put('cart', $cart);

            return redirect('/kasir');
        }

        public function updateQty(Request $request, $id)
            {
                $cart = session()->get('cart', []);

                if (!isset($cart[$id])) {
                    return redirect('/kasir');
                }

                if ($request->action === 'plus') {
                    $cart[$id]['qty'] += 1;
                }

                if ($request->action === 'minus') {
                    $cart[$id]['qty'] -= 1;

                    if ($cart[$id]['qty'] <= 0) {
                        unset($cart[$id]);
                    }
                }

                session()->put('cart', $cart);

                return redirect('/kasir');
            }

        public function hapus($id)
            {
                $cart = session()->get('cart', []);
                unset($cart[$id]);
                session()->put('cart', $cart);

                return redirect('/kasir');
            }

        public function reset()
            {
                session()->forget('cart');
                return redirect('/kasir');
            }

        public function checkout()
            {
                session()->forget('cart');
                return redirect('/kasir')->with('success', 'Checkout berhasil!');
            }

}
