<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function anggota()
    {
        $totalrm = DB::table('anggotamuhammadiyah')->where('tipe_anggota', 'Ranting Muhammadiyah')->count();
        $totalra = DB::table('anggotamuhammadiyah')->where('tipe_anggota', 'Ranting Aisyiyah')->count();
        $totalrmaktif = DB::table('anggotamuhammadiyah')->where('tipe_anggota', 'Ranting Muhammadiyah')->where('status', 'Aktif')->count();
        $totalraaktif = DB::table('anggotamuhammadiyah')->where('tipe_anggota', 'Ranting Aisyiyah')->where('status', 'Aktif')->count();

        $rmsidomulyo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Sidomulyo')->count();
        $rmtegalrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Tegalrejo')->count();
        $rmtompeyan = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Tompeyan')->count();
        $rmkarangwarulor = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Karangwaru Lor')->count();
        $rmkricakkidul = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Kricak Kidul')->count();
        $rmpetinggen = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Petinggen')->count();
        $rmjatimulyo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Jatimulyo')->count();
        $rmbangunrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Bangunrejo')->count();
        $rmblunyahrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Blunyahrejo')->count();
        $rmbangirejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Bangirejo')->count();

        $rapetinggen = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Petinggen')->count();
        $rablunyahrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Blunyahrejo')->count();
        $rakarangwaru = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Karangwaru')->count();
        $rajatimulyo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Jatimulyo')->count();
        $rakricakkidul = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Kricak Kidul')->count();
        $rabangirejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Bangirejo')->count();
        $rabangunrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Bangunrejo')->count();
        $rasudagaran = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Sudagaran')->count();
        $rategalrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Tegalrejo')->count();
        $ratompeyan = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Tompeyan')->count();
        $rasidomulyo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Sidomulyo')->count();

        $stmsidomulyo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Sidomulyo')->where('status','Aktif')->count();
        $stmtegalrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Tegalrejo')->where('status','Aktif')->count();
        $stmtompeyan = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Tompeyan')->where('status','Aktif')->count();
        $stmkarangwarulor = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Karangwaru Lor')->where('status','Aktif')->count();
        $stmkricakkidul = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Kricak Kidul')->where('status','Aktif')->count();
        $stmpetinggen = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Petinggen')->where('status','Aktif')->count();
        $stmjatimulyo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Jatimulyo')->where('status','Aktif')->count();
        $stmbangunrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Bangunrejo')->where('status','Aktif')->count();
        $stmblunyahrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Blunyahrejo')->where('status','Aktif')->count();
        $stmbangirejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Muhammadiyah Bangirejo')->where('status','Aktif')->count();

        $stapetinggen = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Petinggen')->where('status','Aktif')->count();
        $stablunyahrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Blunyahrejo')->where('status','Aktif')->count();
        $stakarangwaru = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Karangwaru')->where('status','Aktif')->count();
        $stajatimulyo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Jatimulyo')->where('status','Aktif')->count();
        $stakricakkidul = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Kricak Kidul')->where('status','Aktif')->count();
        $stabangirejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Bangirejo')->where('status','Aktif')->count();
        $stabangunrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Bangunrejo')->where('status','Aktif')->count();
        $stasudagaran = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Sudagaran')->where('status','Aktif')->count();
        $stategalrejo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Tegalrejo')->where('status','Aktif')->count();
        $statompeyan = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Tompeyan')->where('status','Aktif')->count();
        $stasidomulyo = DB::table('anggotamuhammadiyah')->where('ranting','Ranting Aisyiyah Sidomulyo')->where('status','Aktif')->count();

        return view('anggota', ['total_rm' => $totalrm,
                                            'total_ra' => $totalra,
                                            'rmsidomulyo' => $rmsidomulyo,
                                            'rmtegalrejo' => $rmtegalrejo,
                                            'rmtompeyan' => $rmtompeyan,
                                            'rmkarangwarulor' => $rmkarangwarulor,
                                            'rmkricakkidul' => $rmkricakkidul,
                                            'rmpetinggen' => $rmpetinggen,
                                            'rmjatimulyo' => $rmjatimulyo,
                                            'rmbangunrejo' => $rmbangunrejo,
                                            'rmbangirejo' => $rmbangirejo,
                                            'rmblunyahrejo' => $rmblunyahrejo,
                                            'rapetinggen' => $rapetinggen,
                                            'rablunyahrejo' => $rablunyahrejo,
                                            'rakarangwaru' => $rakarangwaru,
                                            'rajatimulyo' => $rajatimulyo,
                                            'rakricakkidul' => $rakricakkidul,
                                            'rabangirejo' => $rabangirejo,
                                            'rabangunrejo' => $rabangunrejo,
                                            'rasudagaran' => $rasudagaran,
                                            'rategalrejo' => $rategalrejo,
                                            'ratompeyan' => $ratompeyan,
                                            'rasidomulyo' => $rasidomulyo,
                                            'stmsidomulyo' => $stmsidomulyo,
                                            'stmtegalrejo' => $stmtegalrejo,
                                            'stmtompeyan' => $stmtompeyan,
                                            'stmkarangwarulor' => $stmkarangwarulor,
                                            'stmkricakkidul' => $stmkricakkidul,
                                            'stmpetinggen' => $stmpetinggen,
                                            'stmjatimulyo' => $stmjatimulyo,
                                            'stmbangunrejo' => $stmbangunrejo,
                                            'stmbangirejo' => $stmbangirejo,
                                            'stmblunyahrejo' => $stmblunyahrejo,
                                            'stapetinggen' => $stapetinggen,
                                            'stablunyahrejo' => $stablunyahrejo,
                                            'stakarangwaru' => $stakarangwaru,
                                            'stajatimulyo' => $stajatimulyo,
                                            'stakricakkidul' => $stakricakkidul,
                                            'stabangirejo' => $stabangirejo,
                                            'stabangunrejo' => $stabangunrejo,
                                            'stasudagaran' => $stasudagaran,
                                            'stategalrejo' => $stategalrejo,
                                            'statompeyan' => $statompeyan,
                                            'stasidomulyo' => $stasidomulyo,
                                            'totalrmaktif' => $totalrmaktif,
                                            'totalraaktif' => $totalraaktif
                                        ]);
    }
}
