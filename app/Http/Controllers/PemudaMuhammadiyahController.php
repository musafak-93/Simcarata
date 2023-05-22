<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PemudaMuhammadiyahController extends Controller
{
    public function pm()
    {
        $users = DB::table('pimpinan')->orderby('created_at', 'desc')->get();
        return view('pemudamuhammadiyah', ['data_pm' => $users]);
    }
}
