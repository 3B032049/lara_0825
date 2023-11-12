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
/*
    $post = new Post();
    $post->title="test_title";
    $post->content="test_content";
    $post->save();
    return 'Saved, OK!';
*/
/*
    Post::create([
        'title'=>'created title',
        'content'=>'created content',
    ]);
*/
/*
    $posts =Post::all();
    //使用迴圈將所有貼文($posts)一一顯示出來
    foreach ($posts as $post) {
        echo "編號:".$post->id. '<br>';
        echo "標題:".$post->title. '<br>';
        echo "內容:".$post->content. '<br>';
        echo "張貼時間:".$post->created_at. '<br>';
        echo "---------".'<br>';

    }
    dd($post);
    //迴圈每轉一次,由$posts依序取出一篇貼文$post dd ($posts);
*/
/*
$post = Post::find(6);
echo '標題: '.$post->title.'<br>';
echo '內容: '.$post->content.'<br>';
echo '--------------------------'.'<br>';
dd($post);
*/
$posts = Post::where('id','<','10')->orderBy('id','DESC')->get();
dd($posts);
});
