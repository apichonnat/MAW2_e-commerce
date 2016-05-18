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

//        $article = Article::find(20);
//        dd($article->media[0]->path);
        //var_dump($articles);

//        return "toto";
        return view('articles.index', ['articles' => $articles]);

    }

    public function show()
    {
        echo "accueil show article";
    }

    public function destroy($article)
    {
        //TODO: destroy selected article
    }


}
