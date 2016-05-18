<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Models\ArticleMedia;
use App\Models\Category;
use App\Models\Language;
use App\Models\ContainArticle;
use App\Models\Media;
use App\Models\TypeMedia;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

        return view('admin/articles.create', ['data' => $data, 'language' => $lang, 'type_media' => $typeM]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {
        $article = new Article();

        $article->state = "reserve";
        $article->category_id = $data->category;

        $article->save();

        $content_article = new ContainArticle();

        $content_article->title = $data->title;
        $content_article->subtitle = $data->subtitle;
        $content_article->description = $data->description;
        $content_article->language_id = $data->language;
        $content_article->article_id = $article->id;

        $content_article->save();

        $name = $data->file('image')->getClientOriginalName();
        $data->file('image')->move(base_path().'/public/images/', $name);

        $articleMedia = new ArticleMedia();
        $media = new Media();


        $media->path = 'images/'.$data->file('image')->getClientOriginalName();
        $media->type_media_id = $data->typeImage;
        $media->description = $data->desc;

        $media->save();

        $articleMedia->media_id = $media->id;
        $articleMedia->article_id = $article->id;

        $articleMedia->save();
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
