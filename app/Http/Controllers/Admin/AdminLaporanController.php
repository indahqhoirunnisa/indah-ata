<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pembayaran;

class AdminLaporanController extends Controller
{
    public function produk()
    {
        $produk = Produk::all();
        return view('admin.laporan.produk', compact('produk'));
    }

    public function transaksi()
    {
        $pembayaran = Pembayaran::groupBy('order_id')->get('order_id');
        foreach ($pembayaran as $item) {
            $bayar[] = Pembayaran::where('order_id', $item->order_id)->latest()->first();
        }
        return view('admin.laporan.transaksi', compact('bayar'));
        return $bayar;
    }
}
