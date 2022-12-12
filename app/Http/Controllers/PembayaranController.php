<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Pembayaran;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function simpan(Request $request)
    {
        $json = json_decode($request->json);
        $pembayaran = new Pembayaran();
        $pembayaran->order_id = $json->order_id;
        $pembayaran->id_user = auth()->user()->id;
        $pembayaran->total_bayar = $json->gross_amount;
        $pembayaran->metode_bayar = $json->payment_type;
        $pembayaran->pdf_url = $json->pdf_url ?? null;
        $pembayaran->tgl_bayar = Carbon::parse($json->transaction_time)->format('Y-m-d');
        $pembayaran->status_pembayaran = $json->transaction_status;
        $pembayaran->save();

        if($json->transaction_status == 'settlement') {
            $keranjang = Keranjang::where('order_id', $json->order_id)->get();
            foreach ($keranjang as $item) {
                $produk = Produk::find($item->id_produk);
                $produk->stok = $produk->stok - $item->jumlah;
                $produk->save();
            }
        }
        return redirect()->route('bayar.nota', [
            'id' => $json->order_id
        ]);
    }

    public function nota($id)
    {
        $pembayaran = Pembayaran::where('order_id', $id)->latest()->first();
        // return $pembayaran->pesanan;
        return view('pelanggan.nota', compact('pembayaran'));
    }
}
