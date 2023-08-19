<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class PagesController extends Controller
{
    public function posts()
    {
        // Single Data In Controller
        // $name = "Akash";
        // $age = 26;

        // return 'Name: '. $name .' Age: '.$age;

        // Object
        // $user = new stdClass();
        // $user->name = "Akash";
        // $user->age = 26;
        // $user->gender = 'Male';
        // print_r($user);


        // Multiple Data / Array
        $posts = [];
        $singlePost = new stdClass();
        $singlePost->name = "Akash";
        $singlePost->age = 26;
        $singlePost->gender = 'Male';

        // [
        //     'id' => 1,
        //     'title' => 'Simple Title',
        //     'total_view' => 100,
        // ];
        array_push($posts, $singlePost);

        $singlePost = new stdClass();
        $singlePost->name = "Mabrur";
        $singlePost->age = 41;
        $singlePost->gender = 'Male';
        array_push($posts, $singlePost);

        print_r($posts);

        return redirect('http://localhost/laravel-app/public/posts-view')
            ->withCookie(cookie('Custom-Header', 'Custom Value2', "10"))
            ->withCookie(cookie('Another-Header', 'Another Value2', "10"));
    }

    public function postsView(Request $request)
    {
        // Cookie::queue('Custom-Header', 'Custom Value2', 60);

        $customHeader = $request->cookie('Custom-Header'); // 'Custom Value'를 가져옵니다.

        var_dump($customHeader);

        $posts = [];
        $singlePost = new stdClass();
        $singlePost->id = 1;
        $singlePost->title = "Simple Post 1";
        $singlePost->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $singlePost->total_view = 20;
        array_push($posts, $singlePost);

        $singlePost = new stdClass();
        $singlePost->id = 2;
        $singlePost->title = "Simple Post 2";
        $singlePost->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $singlePost->total_view = 100;
        array_push($posts, $singlePost);


        $singlePost = new stdClass();
        $singlePost->id = 3;
        $singlePost->title = "Simple Post 3";
        $singlePost->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $singlePost->total_view = 200;
        array_push($posts, $singlePost);

        return view('posts', compact('posts'));
    }

    public function show($id)
    {
        $post = new stdClass();
        $post->id = $id;
        $post->title = "Simple Post 1";
        $post->description = ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!<br />Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, pariatur. Possimus veniam dolorum totam eligendi aperiam perspiciatis consequatur reprehenderit quas atque molestias quam vitae libero, incidunt nihil in quae ipsum!';
        $post->total_view = 20;
        return view('post-single', compact('post'));
    }
}
