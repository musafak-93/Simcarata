<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CabangAisyiyahController extends Controller
{
    public function pca()
    {
        $users = DB::table('pimpinan')->orderby('created_at', 'asc')->get();
        return view('cabangaisyiyah', ['data_pca' => $users]);
    }
}
