<?php

namespace App\Http\Controllers;

use App\Models\AnggotaMuhammadiyah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RantingMuhammadiyahController extends Controller
{
    public function prm()
    {
        $users = DB::table('rantingmuhammadiyah')->get();
        return view('rantingmuhammadiyah', ['data_prm' => $users]);
    }
}
