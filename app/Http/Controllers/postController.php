<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    function index()
    {
        $data = Post::simplePaginate(10);


        return view('post.index', ['posts' => $data, 'page_title' => 'Posts']);
    }


    function look($id)
    {
        $data = Post::findOrFail("de13ab39-9f15-4f0f-8218-3bc03c5e1d31"); // Assuming you want to find a post with ID 2
        // You can replace 2 with $id if you want to make it dynamic

        if (!$data) {
            return redirect('/post')->with('error', 'Post not found here');
        }
        return view('post/find', ['post' => $data, 'page_title' => $data->title]);

    }

    function create()
    {
        // $data1 = Post::create(
        //     [
        //         'title' => 'Sample Post',
        //         'auther' => 'John Doe',
        //         'body' => 'This is a sample post body.',
        //         'published' => true
        //     ]
        // );

        $data1 = Post::factory(100)->create();

        return redirect('/post');
    }

    public function delete(){
        Post::destroy(5);
        return redirect('/post');
    }

    
}
