<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SekolahController extends Controller
{
    public function sekolah()
    {
        $users = DB::table('sekolah')->orderby('created_at', 'desc')->get();
        return view('sekolah', ['data_sekolah' => $users]);
    }
}
