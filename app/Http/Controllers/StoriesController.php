<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Storie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoriesController extends Controller
{
    public function recieve() {
        return Storie::query()->orderBy("created_at", "desc")->paginate(4);
    }

    public function createForm() {
        return view("stories.create");
    }

    public function create(Request $request) {
        if(!empty($_POST)){
            $request->validate([
                "title" => "max:100|required",
                "picture" => "required|image"
            ]);
    
            if($request->hasFile("picture")) {
                $folder = date("Y.m.d");
                
                $picture = $request->file("picture")->store("public/images/{$folder}");
            }
    
            Storie::create([
                "title" => $request->title,
                "picture" => Storage::url($picture)
            ]);

            return redirect()->route("main");
        }

        return view("stories.create");
    }
}
