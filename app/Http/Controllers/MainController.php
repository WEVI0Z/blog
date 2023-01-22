<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\PostsController;

class MainController extends Controller
{
    public function index(Request $request) {
        $posts = Post::query()->orderBy("created_at", "desc")->paginate(3);

        return view("main", compact("posts"));
    }
}
