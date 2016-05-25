<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use App\Models\TypeMedia;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\ArticleMedia;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class PicturesController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        $typeMedia = TypeMedia::all();
        return view('admin/articles.addpicture', ['articles' => $articles, '$typeMedia' => $typeMedia]);

    }

    public function store(Request $data)
    {
        $articlemedia = new ArticleMedia();
        $media = new Media();

        $name = $data->file('image')->getClientOriginalName();
        $data->file('image')->move(base_path().'/public/images/', $name);

        $media->path = 'images/'.$data->file('image')->getClientOriginalName();
        $media->description = $data->desc;
        $media->type_media_id = $data->typeImage;

        $media->save();

        $articlemedia->media_id = $media->id;
        $articlemedia->article_id = $data->idArticle;

        $articlemedia->save();
        return redirect()->route('admin.articles.index');
    }

    public function update()
    {
        print_r("salut");
    }


    public function edit($id)
    {

        $typeMedia = TypeMedia::all();

        foreach($typeMedia as $value)
        {
            $typeM[] = array($value->id => $value->name);
        }

        return view('admin/articles.addpicture', ['idArticle' => $id, 'type_media' => $typeM]);
    }


}
