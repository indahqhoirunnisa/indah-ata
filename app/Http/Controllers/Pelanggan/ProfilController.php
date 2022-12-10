<?php

namespace App\Http\Controllers\Pelanggan;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\RajaOngkirController;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = User::find(auth()->user()->id);
        $provinsi = RajaOngkirController::provinsi();
  
        return view('pelanggan.profil', compact('profil', 'provinsi'));
    }
  
    public function simpan(Request $request)
    {
        $profil = User::find(auth()->user()->id);
        $profil->name = $request->name;
        $profil->no_telp = $request->no_telp;
        $prov = explode("|", $request->provinsi);
        $kota = explode("|", $request->kota);
        $alamat = array(
          'provinsi_id' => $prov[0],
          'provinsi' => $prov[1],
          'kota_id' => $kota[0],
          'kota' => $kota[1],
          'alamat' => $request->alamat
        );
        $profil->alamat = json_encode($alamat);
        $profil->save();
  
        return redirect()->route('profil');
    }
}
