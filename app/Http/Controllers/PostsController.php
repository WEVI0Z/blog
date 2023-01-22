<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            "title" => "max:100|nullable",
            "description" => "required",
            "picture" => "nullable|image"
        ]);

        if($request->hasFile("picture")) {
            $folder = date("Y.m.d");
            
            $picture = $request->file("picture")->store("public/images/{$folder}");
        }

        Post::create([
            "title" => $request->title??null,
            "description" => $request->description,
            "picture" => Storage::url($picture)??null,
        ]);

        return redirect()->route("main");
    }
}
