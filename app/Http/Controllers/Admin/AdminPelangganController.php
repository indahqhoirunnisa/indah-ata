<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPelangganController extends Controller
{
    public function index()
    {
        $pelanggan = User::where('role', 'user')->paginate(25);
        return view('admin.pelanggan', compact('pelanggan'));
    }
}
