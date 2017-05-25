<?php

namespace App\Http\Controllers;

use App\Category;
use App\Contact;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $posts = Post::get();
//
//
//        return view('home',compact('posts','contacts'));

//        $quotes = DB::table('quotes')->get();
//        return view('home', ['quotes' => $quotes]);
        return view('home');


    }
}
