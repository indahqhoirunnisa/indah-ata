<?php

namespace App\Http\Controllers\Admin;

use App\Models\Retur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminReturController extends Controller
{
    public function index()
    {
        $retur = Retur::all();
        return view('admin.retur', compact('retur'));
    }
}
