<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NasyiatulAisyiyahController extends Controller
{
    public function na()
    {
        $users = DB::table('pimpinan')->orderby('created_at', 'desc')->get();
        return view('nasyiatulaisyiyah', ['data_na' => $users]);
    }
}
