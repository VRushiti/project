<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AboutUsController extends Controller
{

    public function index(){
        $about = DB::table('abouts')->take(1)->get();
        //$about = About::get();
       $contact = DB::table('contacts')->get();
        return view('Front.about', ['contact' => $contact,'about' => $about]);
    }

    public function store(Request $request)
    {



        $title = $request['title'];
        $body = $request['body'];

        $about = new About();

        $about->title = $title;
        $about->body = $body;
        $about->save();

        //return ("Sucess");
        return redirect('admin/contact/index');
    }
}
