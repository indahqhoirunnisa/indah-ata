<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Http\Controllers\CartController;

class CartController extends Controller
{
    public function index()
    {
        $cart = Keranjang::where('id_user', auth()->user()->id)
            ->where('status', 'pending')
            ->get();
        return view('pelanggan.cart', compact('cart'));
    }

    public function getKeranjang($id)
    {
        $produk = Produk::find($id);
        if ($produk->stok < 1) {
            return 'stok tidak ada';
        }
        $ada =  Keranjang::where('id_produk', $id)
            ->where('id_user', auth()->user()->id)
            ->where('status', 'pending')
            ->first();
        if ($ada) {
            $ada->jumlah = $ada->jumlah + 1;
            $ada->save();
        } else {
            $keranjangs = new Keranjang();
            $keranjangs->id_user = auth()->user()->id;
            $keranjangs->id_produk = $id;
            $keranjangs->jumlah = 1;
            $keranjangs->save();
        }
        return redirect()->route('produk');
    }

    public function postKeranjang(Request $request)
    {
        $produk = Produk::find($request->produk_id);
        if ($produk->stok < $request->jumlah) {
            return 'stok tidak ada';
        }
        $ada =  Keranjang::where('id_produk', $request->produk_id)
            ->where('status', 'pending')
            ->where('id_user', auth()->user()->id)
            ->first();
        if ($ada) {
            $ada->jumlah = (int) $ada->jumlah + (int) $request->jumlah;
            $ada->save();
        } else {
            $keranjangs = new Keranjang();
            $keranjangs->id_user = auth()->user()->id;
            $keranjangs->id_produk = $request->produk_id;
            $keranjangs->jumlah = $request->jumlah;
            $keranjangs->save();
        }
        return redirect()->route('cart');
    }

    public function tambah($id)
    {
        $keranjang = Keranjang::find($id);
        $keranjang->jumlah = $keranjang->jumlah + 1;
        $keranjang->save();
        return redirect()->back();
    }

    public function kurang($id)
    {
        $keranjang = Keranjang::find($id);
        $keranjang->jumlah = $keranjang->jumlah - 1;
        $keranjang->save();
        return redirect()->back();
    }

    public function hapus($id)
    {
        $keranjang = Keranjang::find($id);
        $keranjang->delete();
        return redirect()->back();
    }
}
