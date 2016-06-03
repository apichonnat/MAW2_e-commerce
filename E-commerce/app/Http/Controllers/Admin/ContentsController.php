<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContainArticle;
use App\Models\Article;
use App\Models\Language;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContentsController extends Controller
{
    public function store(Request $data)
    {
        $ContentArticle = ContainArticle::find($data->idArticle);

            $contentArticle = new ContainArticle();

            $contentArticle->title = $data->title;
            $contentArticle->subtitle = $data->subtitle;
            $contentArticle->description = $data->desc;
            $contentArticle->language_id = $data->lang;
            $contentArticle->article_id = $data->idArticle;

            $contentArticle->save();

        return redirect()->route('admin.articles.index');

    }

    public function edit($id)
    {
        $content = ContainArticle::find($id);

        return view('admin/articles.editcontent', ['content' => $content]);
    }

    public function destroy($id)
    {
        $contentArticle = ContainArticle::all();
//        if(count($contentArticle->article_id-)){}
//        $contentArticle->state;
        //TODO: Faire un système qui permet de supprimer l'article si le dernier contenu est supprimé
        //TODO: Faire egalement un suppression des id de l'article si supprimer dans la table media_article
        ContainArticle::destroy($id);
        return redirect()->route('admin.articles.index');

    }


}
