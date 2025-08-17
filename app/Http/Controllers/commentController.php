<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class commentController extends Controller
{
    function index()
    {
        $data = Comment::simplePaginate(10);

        return view('comment.index', ['comments' => $data, 'page_title' => 'comments']);
    }


    function create()
    {
        // $data1 = Comment::create(
        //     [
        //         'auther' => 'John Doe',
        //         'content' => 'This is a sample comment content',
        //         'post_id'=> "de13ab39-9f15-4f0f-8218-3bc03c5e1d31",
        //     ]
        // );

        $data = Comment::factory(100)->create();
        return redirect('/comment');
    }


}
