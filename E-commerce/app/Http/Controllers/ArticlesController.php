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
        $article = Article::find($id);

//            var_dump($article->media);
//        var_dump($article->contain_article->where('language_id', '2'));

        return view('articles.show', ['article'=> $article->contain_article->first(), 'media'=> $article->media]);
    }



}
