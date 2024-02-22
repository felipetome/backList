<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        return Comments::all(); //
    }
    public function store(Request $request)
    {
        Comments::create([
            'user_origin_id' => $request->user_origin_id,
            'user_target_id' => $request->user_target_id,
            'content_id' => $request->content_id,
            'comment' => $request->comment,
            'created' => $request->created,
            'likes_count' => $request->likes_count,
        ]);

        return response(["Comentario criado"], 200);
    }
}
