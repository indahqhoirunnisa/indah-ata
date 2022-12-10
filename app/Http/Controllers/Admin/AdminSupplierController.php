<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\PenerimaanBarang;
use App\Http\Controllers\Controller;

class AdminSupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return view('admin.supplier.index', compact('supplier'));
    }

    public function tambah()
    {
        return view('admin.supplier.tambah');
    }

    public function hapus($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect()->back();
    }
    public function simpan(Request $request)
    {
        $supplier = new Supplier();
        $supplier->nama_supplier = $request->nama;
        $supplier->email = $request->email;
        $supplier->alamat = $request->alamat;
        $supplier->no_telp = $request->no_telp;
        $supplier->save();
        return redirect()->route('admin.supplier');
    }

    // tambah produk
    public function produk($id)
    {
        // mengambil data supplier
        $supplier = Supplier::find($id);

        return view('admin.supplier.produk', compact('supplier'));
    }

    public function kategori(Request $request)
    {
        $produk = Produk::where('kategori', $request->id)->get();
        return $produk;
    }

    public function produkCari(Request $request)
    {
        $produk = Produk::find($request->id);
        return $produk;
    }

    public function produkSimpan(Request $request)
    {
        $terima = new PenerimaanBarang();
        $terima->id_supplier = $request->supplier;
        $terima->id_produk = $request->produk;
        $terima->jumlah = $request->jumlah;
        $terima->total = $request->total;
        $terima->save();

        if ($terima) {
            $produk = Produk::find($request->produk);
            $produk->stok = $produk->stok + $request->jumlah;
            $produk->save();
        }

        return redirect()->route('admin.supplier');
    }
}
    

