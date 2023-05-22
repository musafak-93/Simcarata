<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PantiAsuhanController extends Controller
{
    public function pantiasuhan()
    {
        $users = DB::table('pantiasuhan')->orderby('created_at', 'desc')->get();
        return view('pantiasuhan', ['data_pantiasuhan' => $users]);
    }
}
