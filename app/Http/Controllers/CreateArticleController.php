<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class CreateArticleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:edit-post');
    }

    public function index()
    {
        return view('creatArticle');
    }

    public function creat(Request $request)
    {
        $data = $request->except('_token');
        if($request->hasFile('images')){
            $file = $request->file('images');
            $file->move(public_path().'/img/',$file->getClientOriginalName());
            $data['images'] = $file->getClientOriginalName();
        }
        $article = new Article();
        $article->fill($data);
        $article->save();
        return redirect('home');
    }
}
