<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PimpinanRantingController extends Controller
{
    public function prm()
    {
        $users = DB::table('pimpinan')->orderby('created_at', 'asc')->get();
        return view('prantingmuhammadiyah', ['data_prm' => $users]);
    }
    public function pra()
    {
        $users = DB::table('pimpinan')->orderby('created_at', 'asc')->get();
        return view('prantingaisyiyah', ['data_pra' => $users]);
    }
}
