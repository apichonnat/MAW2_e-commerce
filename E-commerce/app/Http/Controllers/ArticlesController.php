<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\ArticleMedia;
use App\Models\Category;
use App\Models\Language;
use App\Models\ContainArticle;
use App\Models\Media;
use App\Models\TypeMedia;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);

    }

    public function show($id)
    {
        $articles = ContainArticle::all();

        foreach($articles as $article)
        {
            if($article->article_id == $id)
            {
                if($article->language_id == 1)
                {

                    $view = $article;
                }
            }
        }





//        echo "accueil show article : ".$id;
        return view('articles.show', ['article'=> $view]);
    }



}
