<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use View;

class IndexController extends Controller
{


    function about()
    {
        return view('about' , ['page_title'=> 'About page']);
    }

    function contact()
    {
        return view('contact' , ['page_title'=> "Contact page"]);
    }

    function index()
    {
        return view('index' , ['page_title'=> 'Home page']);
    }

}