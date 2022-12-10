<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::paginate(25);
        return view('produk', compact('produk'));
    }

    public function benih()
    {
        $produk = Produk::where('kategori', 'Benih')->paginate(25);
        return view('produk', compact('produk'));
    }

    public function pupuk()
    {
        $produk = Produk::where('kategori', 'Pupuk')->paginate(25);
        return view('produk', compact('produk'));
    }

    public function pestisida()
    {
        $produk = Produk::where('kategori', 'Pestisida')->paginate(25);
        return view('produk', compact('produk'));
    }

    public function fungisida()
    {
        $produk = Produk::where('kategori', 'Fungisida')->paginate(25);
        return view('produk', compact('produk'));
    }

    public function insektisida()
    {
        $produk = Produk::where('kategori', 'Insektisida')->paginate(25);
        return view('produk', compact('produk'));
    }

    public function herbisida()
    {
        $produk = Produk::where('kategori', 'Herbisida')->paginate(25);
        return view('produk', compact('produk'));
    }

    public function detail($id)
    {
        $produk = Produk::find($id);
        return view('detail', compact('produk'));
    }
}
