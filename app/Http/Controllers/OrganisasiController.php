<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganisasiController extends Controller
{
    public function pimpinan()
    {
        $pimpinan = DB::table('pimpinan')
        ->orderby('organisasi', 'desc')->get();
        return view('profil', ['pimpinan' => $pimpinan]);
    }

    // public function pca()
    // {
    //     $pca = DB::table('pimpinan')
    //     ->where('organisasi','like','Cabang Aisyiyah Tegalrejo')->orderby('organisasi', 'desc')->get();
    //     return view('pca', ['pca' => $pca]);
    // }

    // public function ppm()
    // {
    //     $ppm = DB::table('pimpinan')
    //     ->where('organisasi','like','Pemuda Muhammadiyah')->orderby('organisasi', 'desc')->get();
    //     return view('ppm', ['ppm' => $ppm]);
    // }

    // public function pna()
    // {
    //     $pna = DB::table('pimpinan')
    //     ->where('organisasi','like','Nasyiatul Aisyiyah')->orderby('organisasi', 'desc')->get();
    //     return view('pna', ['pna' => $pna]);
    // }
}
