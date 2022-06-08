<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        $text = "Laravel Lorem";
        $text3 = '<p>Laravel lorem 3</p>';
        return view('about', ['text' => $text, 
                              'text2' => 'Laravel Lorem2',
                              'text3' => $text3
                            ]);
    }

    public function article(){
        return view('article');
    }

    public function contact(){
        return view('contact');
    }
}
