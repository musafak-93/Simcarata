<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BMTController extends Controller
{
    public function bmt()
    {
        $users = DB::table('bmt')->orderby('created_at', 'desc')->get();
        return view('bmt', ['data_bmt' => $users]);
    }
}
