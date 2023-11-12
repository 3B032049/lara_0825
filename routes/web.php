<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Comment;


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
/*
$posts = Post::where('id','<','10')->orderBy('id','DESC')->get();
dd($posts);
*/



/*
    $post = Post::find(1);
    $post->update([
        'title'=>'updated title',
        'content'=>'updated content',
    ]);
    return 'Updated!';
*/
    /*
    $post = Post::find(1);
    $post->title = 'saved title';
    $post->content = 'saved content';
    $post->save();
    return 'Saved!';
    */
    /*
    $post = Post::find(1);
    $post->delete();
    */
    /*
    Post::destroy(2);
    */
//$allPosts = Post::all();
//dd($allPosts);

//$featurePosts = Post::where('is_feature', 1)->get();
//dd($featurePosts);

//$fourthPost = Post::find(4);
//dd($fourthPost);

//$lastPost = Post::orderBy('id','DESC')->first();
//dd($lastPost);


    $post = Post::find(6);
    echo '標題: '.$post->title.'<br>';
    echo '內容: '.$post->content.'<br>';
    echo '--------------------------'.'<br>';
    $comments = $post->comments;
    foreach ($comments as $comment){
        echo '留言: '.$comment->content."<br>";
        echo '--------------------------'.'<br>';
    }
});
