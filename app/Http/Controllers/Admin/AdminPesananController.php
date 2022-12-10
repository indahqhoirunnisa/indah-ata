<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\Pembayaran;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class AdminPesananController extends Controller
{
    public function index()
    {
        $pesanan = Pembayaran::where('status_pembayaran', 'settlement')->paginate(10);
        return view('admin.pesanan.index', compact('pesanan'));
    }

    public function detail($id)
    {
        $keranjang = Keranjang::where('order_id', $id)->get();
        return view('admin.pesanan.detail', compact('keranjang'));
    }

    public function kirim(Request $request)
    {
        $pesanan = Pesanan::find($request->id);
        $pesanan->resi = $request->resi;
        $pesanan->status = 'send';
        $pesanan->save();

        return redirect()->route('admin.pesanan');
    }
}
