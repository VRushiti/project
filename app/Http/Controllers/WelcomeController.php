<?php

namespace App\Http\Controllers;
use App\About;
use App\Contact;
use App\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $about = About::all()->take(1);
        $contact = Contact::all();


        $posts = Post::orderBy('created_at','desc')->take(6)->get();


        return view('welcome',compact('posts','contact','about'));
    }
}
