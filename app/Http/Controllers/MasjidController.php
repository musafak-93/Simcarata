<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasjidController extends Controller
{
    public function masjid()
    {
        $users = DB::table('masjid')->orderby('created_at', 'desc')->get();
        return view('masjid', ['data_masjid' => $users]);
    }
}
