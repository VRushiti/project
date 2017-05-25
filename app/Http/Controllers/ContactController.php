<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\About;
class ContactController extends Controller
{
    public function index()
    {
        $about = About::all()->take(1);
//        $posts = Post::get();
//
//
//        return view('home',compact('posts','contacts'));

        $contact = DB::table('contacts')->get();
        return view('Front.contact', ['contact' => $contact, 'about' => $about]);


    }
}
