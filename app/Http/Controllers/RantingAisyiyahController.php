<?php

namespace App\Http\Controllers;

use App\Models\AnggotaMuhammadiyah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RantingAisyiyahController extends Controller
{
    public function pra()
    {
        $users = DB::table('rantingaisyiyah')->orderby('created_at', 'desc')->get();
        $total_anggota = AnggotaMuhammadiyah::where('tipe_anggota','Ranting Aisyiyah Tegalrejo')->count();
        return view('rantingaisyiyah', ['data_pra' => $users], ['jumlah_anggota' => $total_anggota]);
    }
}
