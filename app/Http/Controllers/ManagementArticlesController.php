<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;

class ManagementArticlesController extends Controller
{
    //
    public function viewAll()
    {
        $articles = Article::all();
        $data = [
            'articles' => $articles
        ];
        return view('managementArticles',$data);
    }

    public function delete($idArticle)
    {
        $article =  Article::find($idArticle);
        $article->delete();
        return redirect('management/articles');
    }
}
