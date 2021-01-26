<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function select(){
        return response()->json(Post::get(), 200);
    }

    public function select_id($id){
        $post = Post::find($id);
        if(is_null($post)){
            return response()->json('Bu post topilmadi !!!', 404);
        }
        return response()->json($post, 200);
    }

    public function postsave(Request $request){
        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        if(is_null($post)){
            return response()->json('Bu post mavjud emas !!!', 404);
        }
        $post -> update($request -> all());
        return response()->json($post, 200);
    }

    public function delete(Request $request, Post $post){
        $post -> delete();
        return response()->json(null, 204);
    }
}