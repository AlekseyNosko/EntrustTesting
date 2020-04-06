<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  index()
    {
        $articles = Article::all();
        //dd($articles);
        $data = [
            'articles' => $articles
        ];
        return view('home',$data);
    }

}
