<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LAZISMUController extends Controller
{
    public function lazismu()
    {
        $users = DB::table('lazismu')->orderby('created_at', 'desc')->get();
        return view('lazismu', ['data_lazismu' => $users]);
    }
}
