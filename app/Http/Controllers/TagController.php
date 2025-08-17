<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index()
    {
        $data = Tag::simplePaginate(10);

        return view('tag.index', ['tags' => $data, 'page_title' => 'tags']);
    }


    function create()
    {
        // $data1 = Tag::create(
        //     [
        //         'title' => 'CSS',
        //         ]
        // );
        $data = Tag::factory(100)->create();
        return redirect('/tag');
    }

    function test_many_to_many()
    {
        // $post1 = Post::find(1);
        // $post2 = Post::find(2);

        // $post1->tags()->attach([1 , 2]);
        // $post2->tags()->attach([1]);

        $tag1 = Tag::find(1);

        $tag1->Posts()->attach([8]);

        return response()->json([
            'tag' => $tag1->title,
            'azoooooz' => 'azoooooz',
            'post2_tags' => $tag1->posts,
        ]);
    }


}
