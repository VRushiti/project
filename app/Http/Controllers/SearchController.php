<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class SearchController extends Controller
{


    public function __construct()
    {
        $this->middleware('role:owner');
    }

    public function index(){

        return view ('admin.search.search');


    }

    public function search(Request $request){


        $output = "";
        if($request->ajax()){
            $users=DB::table('users')->where('name','LIKE','%'.$request->search.'%')->get();
            //->orWhere('body','LIKE','%'.$request->search.'%')->get();

            if($users){

                foreach ($users as $key => $user){
                    $output.=
                        /*  '<tr>'.
                          '<td>{{$post->id}}</td>'.
                          '<td><img height="50" src="{{$post->photo ? $post->photo->file : "http://placehold.it/400x400" }} " alt=""></td>'.
                          '<td><a href="{{route("admin.posts.edit", $post->id)}}">{{$post->user->name}}</a></td>'.
                          '<td>{{$post->category ? $post->category->name : "Uncategorized"}}</td>'.
                          '<td>{{$post->title}}</td>'.
                          '<td>{{str_limit($post->body, 30)}}</td>'.
                          '<td><a href="{{route("home.post", $post->slug)}}">View Post</a></td>'.
                          '<td><a href="{{route("admin.comments.show", $post->id)}}">View Comments</a></td>'.
                          '<td>{{$post->created_at->diffForhumans()}}</td>'.
                          '<td>{{$post->updated_at->diffForhumans()}}</td>'.
                          '</tr>';*/


                        /*'<tr>'.
                            '<td>'.$post->id.'</td>'.
                            '<td>'.$post->photo.'</td>'.
                            '<td>'.$post->user->name.'</td>'.
                            '<td>'.$post->category ? $post->category->name : "Uncategorized".'</td>'.
                            '<td>'.$post->title.'</td>'.
                            '<td>'.str_limit($post->body, 30).'</td>'.
                            '<td>'.route("home.post", $post->slug).'</td>'.
                            '<td>'.route("admin.comments.show", $post->id).'</td>'.
                            '<td>'.$post->created_at->diffForhumans().'</td>'.
                            '<td>'.$post->updated_at->diffForhumans().'</td>'.
                        '</tr>';*/

                        '<tr>'.
                        '<td>'.$user->id.'</td>'.
                        '<td>'.$user->role_id.'</td>'.
                        //'<td>'.$user->is_active.'</td>'.
                        '<td>'.$user->name.'</td>'.
                        '<td>'.$user->email.'</td>'.
                        '</tr>';

                }
                return Response($output);

            }


        }


    }
}
