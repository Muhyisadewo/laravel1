<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir | Halaman Utama</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Reset dan Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif;
        }

        body {
            background-color: #f5f5f7;
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            color: white;
            text-align: center;
            padding: 1.2rem;
            font-size: 1.5rem;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        /* Container Utama */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
        }

        /* Area Produk */
        .produk-area {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        }

        .produk-area h2 {
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 1.4rem;
        }

        .produk-area p {
            color: #6b7280;
            margin-bottom: 1.2rem;
            font-size: 0.95rem;
        }

        /* Search Box */
        .search-box {
            margin-bottom: 1.5rem;
        }

        .search-box input {
            width: 100%;
            padding: 0.9rem 1.2rem;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .search-box input:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }

        /* Daftar Produk */
        .produk-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 1rem;
        }

        .produk-list form {
            margin: 0;
        }

        .produk {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            padding: 1.2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            display: block;
        }

        .produk:hover {
            border-color: #4f46e5;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .produk h4 {
            color: #1f2937;
            margin-bottom: 0.6rem;
            font-size: 1rem;
            font-weight: 600;
        }

        .harga {
            color: #059669;
            font-weight: bold;
            font-size: 1rem;
        }

        /* Tabel Keranjang */
        .overflow-x-auto {
            overflow-x: auto;
            margin-top: 1.5rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        th {
            background-color: #f9fafb;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            color: #374151;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 2px solid #e5e7eb;
        }

        td {
            padding: 1rem;
            border-bottom: 1px solid #e5e7eb;
            color: #4b5563;
        }

        tfoot td {
            font-weight: bold;
            background-color: #f9fafb;
            border-top: 2px solid #e5e7eb;
            color: #1f2937;
            font-size: 1.1rem;
        }

        /* Tombol Aksi */
        .flex.items-center.justify-center.gap-2 {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        button[class*="bg-gray-200"] {
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            border: none;
            background-color: #e5e7eb;
            color: #374151;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        button[class*="bg-gray-200"]:hover {
            background-color: #d1d5db;
        }

        .bg-red-500 {
            background-color: #ef4444;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.2s;
        }

        .bg-red-500:hover {
            background-color: #dc2626;
        }

        .btn-bayar {
            display: block;
            width: 100%;
            margin-top: 1.5rem;
            padding: 1rem;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .btn-bayar:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(239, 68, 68, 0.3);
        }

        /* Responsive untuk HP Kecil (iPhone 6 - 375px) */
        @media (max-width: 480px) {
            .container {
                padding: 0.8rem;
            }

            header {
                font-size: 1.3rem;
                padding: 1rem;
            }

            .produk-area {
                padding: 1rem;
                margin-bottom: 1rem;
            }

            .produk-area h2 {
                font-size: 1.2rem;
            }

            .produk-list {
                grid-template-columns: repeat(2, 1fr);
                gap: 0.8rem;
            }

            .produk {
                padding: 1rem;
            }

            .produk h4 {
                font-size: 0.95rem;
            }

            .harga {
                font-size: 0.9rem;
            }

            th, td {
                padding: 0.8rem 0.6rem;
                font-size: 0.85rem;
            }

            .bg-red-500 {
                padding: 0.4rem 0.8rem;
                font-size: 0.8rem;
            }

            .btn-bayar {
                padding: 0.9rem;
                font-size: 1rem;
            }

            table {
                min-width: 500px;
            }
        }

        /* Responsive untuk Tablet */
        @media (min-width: 768px) {
            .container {
                padding: 1.5rem;
            }

            .produk-list {
                grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
                gap: 1.2rem;
            }

            .produk {
                padding: 1.5rem;
            }
        }

        /* Responsive untuk Desktop */
        @media (min-width: 1024px) {
            .container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 2rem;
                align-items: start;
            }

            .produk-area {
                position: sticky;
                top: 5rem;
            }

            .overflow-x-auto {
                margin-top: 0;
            }

            .btn-bayar {
                grid-column: span 2;
            }
        }

        /* Animasi dan efek tambahan */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .produk, table tr {
            animation: fadeIn 0.3s ease-out;
        }

        /* Scrollbar styling */
        .overflow-x-auto::-webkit-scrollbar {
            height: 6px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 10px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb:hover {
            background: #a1a1a1;
        }
    </style>
</head>
<body>

<header>
    Albestea
<p style="font-size: 15px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: 200;">Al Barokah Es Tea</p>
<span style="cursor:pointer;">&#8942;</span>
</header>

<div class="container">

    <!-- PRODUK -->
    <div class="produk-area">
    <h2>Daftar Produk</h2>
    <p>Nama Kasir: {{ $namaKasir }}</p>
    <p>Tanggal: {{ $tanggal }}</p>

        <div class="search-box">
            <input type="text" placeholder="Cari produk..." autofocus>
        </div>

        <div class="produk-list">

            <form action="{{ url('/kasir/tambah') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="1">
                <input type="hidden" name="nama" value="Gula 1kg">
                <input type="hidden" name="harga" value="14000">

                <button type="submit" class="produk">
                    <h4>Gula 1kg</h4>
                    <div class="harga">Rp 14.000</div>
                </button>
            </form>

            <form action="{{ url('/kasir/tambah') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="2">
                <input type="hidden" name="nama" value="Beras 5kg">
                <input type="hidden" name="harga" value="65000">

                <button type="submit" class="produk">
                    <h4>Beras 5kg</h4>
                    <div class="harga">Rp 65.000</div>
                </button>
            </form>

            <form action="{{ url('/kasir/tambah') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="3">
                <input type="hidden" name="nama" value="Minyak Goreng">
                <input type="hidden" name="harga" value="18000">

                <button type="submit" class="produk">
                    <h4>Minyak Goreng</h4>
                    <div class="harga">Rp 18.000</div>
                </button>
            </form>

        </div>
    </div>

    {{-- cart --}}
    <div class="overflow-x-auto mt-4">
        <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Produk</th>
                    <th class="px-4 py-2 text-right text-sm font-semibold text-gray-700">Harga</th>
                    <th class="px-4 py-2 text-center text-sm font-semibold text-gray-700">Qty</th>
                    <th class="px-4 py-2 text-right text-sm font-semibold text-gray-700">Subtotal</th>
                    <th class="px-4 py-2 text-center text-sm font-semibold text-gray-700">Aksi</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @php $total = 0; @endphp

                @foreach($cart as $id => $item)
                    @php
                        $subtotal = $item['harga'] * $item['qty'];
                        $total += $subtotal;
                    @endphp
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-800">
                            {{ $item['nama'] }}
                        </td>
                        <td class="px-4 py-2 text-sm text-right text-gray-800">
                            Rp {{ number_format($item['harga']) }}
                        </td>
                        <td class="px-4 py-2 text-center">
                            <div class="flex items-center justify-center gap-2">
                                <form action="/kasir/qty/{{ $id }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="action" value="minus">
                                    <button class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">−</button>
                                </form>

                                <span class="px-3 py-1 bg-gray-100 rounded">
                                    {{ $item['qty'] }}
                                </span>

                                <form action="/kasir/qty/{{ $id }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="action" value="plus">
                                    <button class="px-2 py-1 bg-gray-200 rounded hover:bg-gray-300">+</button>
                                </form>
                            </div>
                        </td>

                        <td class="px-4 py-2 text-sm text-right font-medium text-gray-900">
                            Rp {{ number_format($subtotal) }}
                        </td>
                        <td class="px-4 py-2 text-center">
                            <form action="/kasir/hapus/{{ $id }}" method="POST">
                                @csrf
                                <button
                                    type="submit"
                                    class="px-3 py-1 text-sm text-white bg-red-500 rounded hover:bg-red-600 transition">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

            <tfoot class="bg-gray-100">
                <tr>
                    <td colspan="3" class="px-4 py-3 text-right font-semibold text-gray-700">
                        Total
                    </td>
                    <td colspan="2" class="px-4 py-3 text-right font-bold text-lg text-gray-900">
                        Rp {{ number_format($total) }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div style="margin-top: 1.5rem; display: flex; justify-content:center; gap: 1rem;">
        <form action="/kasir/reset" method="POST" onsubmit="return confirm('Yakin ingin mereset transaksi? Semua item akan dihapus.')" style=" display: block;
            width: 100%;
            margin-top: 1.5rem;
            padding: 1rem;
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;" >
        @csrf
            <button type="submit"><i class="fa fa-rotate-left"></i></button>
        </form>

        <form action="/kasir/checkout" method="POST" style=" display: block;
            width: 100%;
            margin-top: 1.5rem;
            padding: 1rem;
            background: green;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;">
            @csrf
            <button type="submit"><i class="fa fa-money-bill"></i>Bayar Sekarang</button>
        </form>
    </div>
</div>
</body>
</html>
