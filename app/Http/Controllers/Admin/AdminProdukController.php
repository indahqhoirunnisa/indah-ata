<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::paginate(10);
        return view('admin.produk.index', compact('produk'));
    }

    public function tambah()
    {
        return view('admin.produk.tambah');
    }

    public function ubah($id)
    {
        $produk = Produk::find($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function simpan(Request $request)
    {
        $produk = new Produk();
        $produk->nama_produk = $request->nama;
        $produk->kategori = $request->jenis;
        $produk->exp = Carbon::parse($request->exp)->format('Y-m-d');
        $produk->harga = $request->harga;
        $produk->berat = $request->berat;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $filename = rand() . $file->getClientOriginalName();
            $file->move(public_path() . '/image/produk', $filename);
            $data = $filename;
            $produk->gambar = $data;
            $produk->save();
            return redirect()->route('admin.produk');
        }
    }

    public function edit(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->nama_produk = $request->nama;
        $produk->kategori = $request->jenis;
        $produk->exp = Carbon::parse($request->exp)->format('Y-m-d');
        $produk->harga = $request->harga;
        $produk->berat = $request->berat;
        $produk->stok = $request->stok;
        $produk->deskripsi = $request->deskripsi;
        if($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $filename = rand() . $file->getClientOriginalName();
            $file->move(public_path() . '/image/produk', $filename);
            $data = $filename;
            $produk->gambar = $data;
            $produk->save();
            return redirect()->route('admin.produk');
        }
    }

    public function hapus($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect()->back();
    }
}
