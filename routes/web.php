<?php

use App\Http\Controllers\Admin\AdminDashoardController;
use App\Http\Controllers\Admin\AdminLaporanController;
use App\Http\Controllers\Admin\AdminPelangganController;
use App\Http\Controllers\Admin\AdminPesananController;
use App\Http\Controllers\Admin\AdminProdukController;
use App\Http\Controllers\Admin\AdminReturController;
use App\Http\Controllers\Admin\AdminSupplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\Api\RajaOngkirController;
use App\Http\Controllers\Pelanggan\ProfilController;
use App\Http\Controllers\PembayaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// route tanpa login atau untuk guest(tamu)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('produk')->name('produk')->group(function(){
    Route::get('/', [ProdukController::class, 'index']);
    Route::get('benih', [ProdukController::class, 'benih'])->name('.benih');
    Route::get('pupuk', [ProdukController::class, 'pupuk'])->name('.pupuk');
    Route::get('pestisida', [ProdukController::class, 'pestisida'])->name('.pestisida');
    Route::get('fungisida', [ProdukController::class, 'fungisida'])->name('.fungisida');
    Route::get('insektisida', [ProdukController::class, 'insektisida'])->name('.insektisida');
    Route::get('herbisida', [ProdukController::class, 'herbisida'])->name('.herbisida');
    Route::get('/{id}', [ProdukController::class, 'detail'])->name('.detail');
});
// Route::get('kategori-cari/{id}', [PelangganProdukController::class, 'cari'])->name('kategori.cari');
// Route::get('pesanan', [PesananController::class, 'index'])->name('pesanan');
// Route::get('cart', [CartController::class, 'index'])->name('cart');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('retur', function () {
    return view('retur');
})->name('retur');

Route::get('pesananpelanggan', function () {
    return view('admin.pesananpelanggan');
})->name('pesananpelanggan');

Route::get('pelanggan', function () {
    return view('admin.pelanggan');
})->name('pelanggan');

// route untuk USER dan perlu login
Route::middleware(['auth'])->group(function(){
    Route::get('profil', [ProfilController::class, 'index'])->name('profil');
    Route::get('kota', [RajaOngkirController::class, 'kota'])->name('kota');
    Route::post('ongkir', [RajaOngkirController::class, 'ongkir'])->name('ongkir.get');
    Route::post('profil', [ProfilController::class, 'simpan']);
    Route::get('cart', [CartController::class, 'index'])->name('cart');
    Route::post('cart', [CartController::class, 'simpan']);
    Route::get('cart/tambah/{id}', [CartController::class, 'tambah'])->name('cart.tambah');
    Route::post('cart/kurang/{id}', [CartController::class, 'kurang'])->name('cart.kurang');
    Route::get('cart/{id}/tambah', [CartController::class, 'getKeranjang'])->name('cart.get');
    Route::post('cart/tambah', [CartController::class, 'postKeranjang'])->name('cart.post');
    Route::get('cart/hapus/{id}', [CartController::class, 'hapus'])->name('cart.hapus');
    Route::get('riwayat', [PesananController::class, 'riwayat'])->name('riwayat');
    Route::get('pesanan', [PesananController::class, 'index'])->name('pesanan');
    Route::get('pesanan/terima/{id}', [PesananController::class, 'terima'])->name('pesanan.terima');
    Route::get('pesanan/retur/{id}', [PesananController::class, 'retur'])->name('pesanan.retur');
    Route::post('pesanan/bayar', [PesananController::class, 'bayar'])->name('pesanan.bayar');
    Route::post('bayar/simpan', [PembayaranController::class, 'simpan'])->name('bayar.simpan');
    Route::get('nota/{id}', [PembayaranController::class, 'nota'])->name('nota');
    Route::post('retur/simpan', [PesananController::class, 'retur_simpan'])->name('retur.simpan');
});

// route untuk ADMIN
Route::prefix('admin')->name('admin')->group(function(){
    Route::get('dashboard', [AdminDashoardController::class, 'index'])->name('.dashboard');
    Route::prefix('produk')->name('.produk')->group(function(){
        Route::get('/', [AdminProdukController::class, 'index']);
        Route::get('tambah', [AdminProdukController::class, 'tambah'])->name('.tambah');
        Route::post('simpan', [AdminProdukController::class, 'simpan'])->name('.simpan');
        Route::get('ubah/{id}', [AdminProdukController::class, 'ubah'])->name('.ubah');
        Route::post('edit', [AdminProdukController::class, 'edit'])->name('.edit');
        Route::get('hapus/{id}', [AdminProdukController::class, 'hapus'])->name('.hapus');
    });
    Route::prefix('supplier')->name('.supplier')->group(function(){
        Route::get('/', [AdminSupplierController::class, 'index']);
        Route::get('tambah', [AdminSupplierController::class, 'tambah'])->name('.tambah');
        Route::post('simpan', [AdminSupplierController::class, 'simpan'])->name('.simpan');
        Route::get('produk/{id}', [AdminSupplierController::class, 'produk'])->name('.produk');
        Route::get('kategori', [AdminSupplierController::class, 'kategori'])->name('.kategori');
        Route::get('cari', [AdminSupplierController::class, 'produkCari'])->name('.produk.cari');
        Route::post('produk/simpan', [AdminSupplierController::class, 'produkSimpan'])->name('.produk.simpan');
    });
    Route::get('pelanggan', [AdminPelangganController::class, 'index'])->name('.pelanggan');
    Route::prefix('pesanan')->name('.pesanan')->group(function(){
        Route::get('/', [AdminPesananController::class, 'index']);
        Route::get('detail/{id}', [AdminPesananController::class, 'detail'])->name('.detail');
        Route::post('kirim', [AdminPesananController::class, 'kirim'])->name('.kirim');
    });
    Route::prefix('retur')->name('.retur')->group(function(){
        Route::get('/', [AdminReturController::class, 'index']);
        Route::get('terima/{id}', [AdminReturController::class, 'terima'])->name('.terima');
        Route::get('tolak/{id}', [AdminReturController::class, 'tolak'])->name('.tolak');
    });
    Route::prefix('laporan')->name('.laporan')->group(function(){
        Route::get('produk', [AdminLaporanController::class, 'produk'])->name('.produk');
        Route::get('transaksi', [AdminLaporanController::class, 'transaksi'])->name('.transaksi');
        Route::get('retur', [AdminLaporanController::class, 'retur'])->name('.retur');
    });
});

Auth::routes();

