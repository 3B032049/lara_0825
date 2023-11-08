<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    //return redirect(route('posts.index'));

    $post = new Post();
    $post->title="test_title";
    $post->content="test_content";
    $post->save();
    return 'Saved, OK!';

    /*
    Post::create([
        'title'=>'created title',
        'content'=>'created content',
    ]);
    */
    /*
    $post = Post::find(1);
    echo '標題:'.$post ->title.'<br>';
    echo '內容:'.$post ->content.'<br>';
    dd($post);
    */
});
