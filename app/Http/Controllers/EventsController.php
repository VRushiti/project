<?php

namespace App\Http\Controllers;
use App\Post;
use App\Contact;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Quotes;
use Illuminate\Support\Facades\Input;
use App\About;


class EventsController extends Controller
{
    public function index(){
        $about = About::all()->take(1);
        $contact = Contact::all();
       // $quotes = DB::table('quotes')->orderBy('created_at','desc')->take(1)->get();
       $quotes = Quotes::orderBy(DB::raw('RAND()'))->take(1)->get();


        $posts = Post::orderBy('created_at','desc')->paginate(6);
//        $posts = Post::paginate(6);

//        $posts = Post::get();
        return view('Front.events',compact('posts','quotes','contact','about'));
    }


    public function storeQuotes(){
        $quotes = new Quotes();

        $quotes->name = Input::get('name');
        $quotes->email = Input::get('email');
        $quotes->notes = Input::get('notes');

        $quotes->save();

        //return ("Sucess");
        return redirect()->back();
    }
}
