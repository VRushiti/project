<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;



class AdminContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:owner');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::get();
        return view('admin.contact.index', compact('contact'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $address = $request['address'];
        $mob = $request['mob'];
        $tel = $request['tel'];
        $email = $request['email'];
        $web = $request['web'];

        $contact = new Contact();

        $contact->address = $address;
        $contact->mob = $mob;
        $contact->tel = $tel;
        $contact->email = $email;
        $contact->web = $web;

        $contact->save();

        //return ("Sucess");
        return redirect('admin/contact/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.edit',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $address = $request['address'];
        $mob = $request['mob'];
        $tel = $request['tel'];
        $email = $request['email'];
        $web = $request['web'];

        $contact = new Contact();

        $contact->address = $address;
        $contact->mob = $mob;
        $contact->tel = $tel;
        $contact->email = $email;
        $contact->web = $web;

        Auth::user()->contact()->whereId($id)->first()->update($input);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function post($slug){


        $post = Post::findBySlugOrFail($slug);


        return view('post', compact('post','comments'));


    }
}
