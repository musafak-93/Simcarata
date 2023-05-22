<?php

namespace App\Http\Controllers;


use App\Models\Pimpinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CabangMuhammadiyahController extends Controller
{
    public function pcm()
    {
        $users = DB::table('pimpinan')->orderby('created_at', 'asc')->get();
        return view('cabangmuhammadiyah', ['data_pcm' => $users]);
    }
}
