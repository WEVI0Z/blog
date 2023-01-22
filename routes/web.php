<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\StoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, "index"])->name("main");

Route::post('post/create', [PostsController::class, "create"])->name("posts.create");

Route::match(["get", "post"], 'stories/create', [StoriesController::class, "create"])->name("stories.create");
