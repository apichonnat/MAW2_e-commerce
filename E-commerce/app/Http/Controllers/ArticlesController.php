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
//        return "toto";
        return view('articles.index');

    }

    public function create()
    {
        $categories = Category::all();

        foreach($categories as $value)
        {
            $data[] = array($value->id => $value->name);

        }
//        var_dump($data);
        $language = Language::all();

        foreach($language as $value)
        {
            $lang[] = array($value->id => $value->name);
        }

        $typeMedia = TypeMedia::all();

        foreach($typeMedia as $value)
        {
            $typeM[] = array($value->id => $value->name);
        }

        return view('articles.create', ['data' => $data, 'language' => $lang, 'type_media' => $typeM]);
    }


    public function store(Request $data)
    {
        $article = new Article();

        $article->state = "reserve";
        $article->category_id = $data->category;

        $article->save();

        $content_article = new ContainArticle();

        $content_article->title = $data->title;
        $content_article->subtitle = $data->subtile;
        $content_article->description = $data->description;
        $content_article->language_id = $data->language;
        $content_article->article_id = $article->id;

        $content_article->save();

        $name = $data->file('image')->getClientOriginalName();
        $data->file('image')->move(base_path().'/public/images/', $name);

        $articleMedia = new ArticleMedia();
        $media = new Media();

        $media->name = $data->file('image')->getClientOriginalName();
        $media->path = base_path().'/public/images/';
        $media->type_media_id = $data->typeImage;
        $media->description = $data->desc;

        $media->save();

        $articleMedia->media_id = $media->id;
        $articleMedia->article_id = $article->id;

        $articleMedia->save();
    }

//    public function storeLanguage()
//    {
//
//    }




    public function show()
    {
        echo "accueil show article";
    }

    public function destroy($article)
    {
        //TODO: destroy selected article
    }


}
