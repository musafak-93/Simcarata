<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function index()
    {

        // return "Hello World";
        // $berita = DB::table('posts')->get();
        $users = DB::table('posts')->orderby('created_at', 'desc')->get();
        return view('welcome', ['data' => $users]);
    }

    public function detail($id)
    {
        $article = DB::table('posts')->where('id', $id)->first();
        return view('detailpost', ['data' => $article]);
    }
    
    public function post(Request $request)
    {
        if($request->get('search')){
    		$search=$request->search;
    		$users = DB::table('posts')->where('title','like','%'.$search.'%')->orderby('created_at', 'desc')->paginate(5);
    	}else{
    		$users = DB::table('posts')->orderby('created_at', 'desc')->paginate(5);
    	}
        // $users = DB::table('posts')->orderby('created_at', 'desc')->simplePaginate(1);
        return view('post', ['data' => $users]);
    }



    

    public function rantingmuhammadiyah()
    {
        return view('rantingmuhammadiyah');
    }

    

    
}
