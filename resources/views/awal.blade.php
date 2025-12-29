<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Kasir | Halaman Utama</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            background-color: #f4f6f8;
        }

        header {
            background-color: #1f2937;
            color: #fff;
            padding: 16px 24px;
            font-size: 20px;
            font-weight: bold;
        }

        .container {
            display: flex;
            margin: 0 auto;
            gap: 16px;
            padding: 16px;
            max-width: 1200px;
        }

        /* ===== LEFT: PRODUK ===== */
        .produk-area {
            flex: 2;
            background: #fff;
            padding: 16px;
            border-radius: 6px;
        }

        .produk-area h2 {
            margin-top: 0;
        }

        .search-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 12px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .produk-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 12px;
        }

        .produk {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 12px;
            text-align: center;
            cursor: pointer;
            background: #fafafa;
        }

        .produk:hover {
            background: #eef2ff;
        }

        .produk h4 {
            margin: 8px 0 4px;
        }

        .harga {
            color: #16a34a;
            font-weight: bold;
        }

        /* ===== RIGHT: TRANSAKSI ===== */
        .transaksi-area {
            flex: 1;
            background: #fff;
            padding: 16px;
            border-radius: 6px;
        }

        .transaksi-area h2 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 12px;
        }

        th, td {
            border-bottom: 1px solid #eee;
            padding: 8px;
            font-size: 14px;
        }

        th {
            text-align: left;
            background: #f9fafb;
        }

        .total {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            margin-top: 12px;
        }

        .btn-bayar {
            width: 100%;
            padding: 12px;
            background: #16a34a;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-bayar:hover {
            background: #15803d;
        }
    </style>
</head>
<body>

<header>
    Kasir Sadewo
</header>

<div class="container">

    <!-- PRODUK -->
    <div class="produk-area">
        <h2>Daftar Produk</h2>
        <p>Tanggal: {{ $date }}</p>

        <div class="search-box">
            <input type="text" placeholder="Cari produk..." autofocus> 
        </div>

        <div class="produk-list">
            <div class="produk">
                <h4>Gula 1kg</h4>
                <div class="harga">Rp 14.000</div>
            </div>
            <div class="produk">
                <h4>Beras 5kg</h4>
                <div class="harga">Rp 65.000</div>
            </div>
            <div class="produk">
                <h4>Minyak Goreng</h4>
                <div class="harga">Rp 18.000</div>
            </div>
        </div>
    </div>

    <!-- TRANSAKSI -->
    <div class="transaksi-area">
        <h2>Transaksi</h2>

        <table>
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Qty</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Gula 1kg</td>
                    <td>1</td>
                    <td>14.000</td>
                </tr>
            </tbody>
        </table>

        <div class="total">
            Total: Rp 14.000
        </div>

        <button class="btn-bayar">
            Bayar
        </button>
    </div>

</div>
<p>Total Penjualan: Rp {{ number_format($totalPenjualan, 0, ',', '.') }}</p>
</body>
</html>
