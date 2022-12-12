<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\MidtransController;
use App\Models\Pembayaran;
use App\Models\Retur;

class PesananController extends Controller
{
    public function index()
    {
        if(empty(auth()->user()->alamat)){
            return redirect()->route('profil');
        }

        $cart = Keranjang::where('id_user', auth()->user()->id)
                ->where('status', 'pending')
                ->get();
  
        return view('pelanggan.pesanan', compact('cart'));
    }

    public function bayar(Request $request)
    {
        $id = rand();

        $pesanan = new Pesanan();
        $pesanan->id = $id;
        $pesanan->id_user = auth()->user()->id;
        $pesanan->total = $request->total;
        $pesanan->ekspedisi = $request->kurir;
        $pesanan->ongkir = $request->ongkir;
        $pesanan->save();

        $cart = Keranjang::where('id_user', auth()->user()->id)
                ->where('status', 'pending')
                ->get();
        foreach ($cart as $item) {
            $item->order_id = $id;
            $item->status = 'checkout';
            $item->save();
        }

        $token = MidtransController::config($id, $request->total);
        return redirect()->back()->with('token', $token);
    }

    public function riwayat()
    {
        $pesanan = Pembayaran::where('status_pembayaran', 'settlement')
                    ->with('pesanan')
                    ->whereHas('pesanan', function($q){
                        $q->where('id_user', auth()->user()->id);
                    })  
                    ->get();
        return view('pelanggan.riwayat', compact('pesanan'));
    }

    public function terima($id)
    {
        $pesanan = Pesanan::find($id);
        $pesanan->status = 'accept';
        $pesanan->save();
        return redirect()->back();
    }

    public function retur($id)
    {
        $pesanan = Pesanan::find($id);
        return view('pelanggan.retur', compact('pesanan'));
    }

    public function retur_simpan(Request $request)
    {
        $retur = new Retur();
        $retur->id_pesanan = $request->id;
        $retur->id_user = auth()->user()->id;
        $retur->keterangan = $request->alasan;
        if($request->hasFile('gambar')){
            $filename = rand() . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path() . '/image/retur', $filename);
            $retur->bukti = $filename;
            $retur->save();
            return redirect()->route('riwayat');
        }
    }
}
