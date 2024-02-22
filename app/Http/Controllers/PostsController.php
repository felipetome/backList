<?php

namespace App\Http\Controllers;


use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        return Posts::all(); //
    }
    public function store(Request $request)
    {
        Posts::create([
            'idAuthor' => $request->idAuthor,
            'type' => $request->type,
            'title' => $request->title,
            'description' => $request->description,
            'createdAt' => $request->createdAt,
            'typeMachine' => $request->typeMachine,
            'totalLikes' => $request->totalLikes
        ]);

        return response(["ok"], 200);
    }

    public function updateLikes(Request $request, $id)
    {
        $post = Posts::find($id);
        if (!$post) {
            return response(["error" => "Post not found"], 404);
        }

        $post->totalLikes = $request->totalLikes;
        $post->save();

        return response(["ok"], 200);
    }
}
