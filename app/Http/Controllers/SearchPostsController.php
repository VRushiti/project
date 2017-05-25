<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Response;

use App\Http\Requests;
use DB;
use App\Post;

class SearchPostsController extends Controller
{
    public function index(){

        $posts = new Post();
        return view ('admin.search_posts.search_posts', compact('posts'));


    }

    public function search_posts(Request $request){


        $output = "";
        if($request->ajax()){
            $posts=DB::table('posts')->where('title','LIKE','%'.$request->search_posts.'%')->get();
            //->orWhere('body','LIKE','%'.$request->search.'%')->get();

            if($posts){

                foreach ($posts as $key => $post){
                    $output.=

                        '<tr>'.
                        '<td>'.$post->title.'</td>'.
                        '<td>'.$post->id.'</td>'.
                        '<td>'.$post->user_id.'</td>'.
                        '<td><a href="{{route(home.post, $post->slug)}}"/>View Post</td>'.
                        '<td><a href="{{route(home.post, $post->slug)}}"/>Edit </td>'.
                        '<td><a href="{{route(home.post, $post->slug)}}"/> Delete </td>'.
                        '</tr>';

                }
                return Response($output);

            }


        }


    }
}
