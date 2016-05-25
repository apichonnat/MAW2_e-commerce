<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContainArticle;
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
//    public function edit(Content $content)
    {
        $langs = Language::all();

        //TODO: Faire un verification pour eviter que l'utilisateur puisse mettre une langue qui existe déja

        foreach($langs as $value)
        {
            $lang[] = array($value->id => $value->name);
        }

        return view('admin/articles.addcontents', ['idArticle' => $id, 'language' => $lang]);
    }

    public function destroy($id)
    {
        $contentArticle = ContainArticle::all();
//        if(count($contentArticle->article_id-)){}
        $contentArticle->state;
        //TODO: Faire un système qui permet de supprimer l'article si le dernier contenu est supprimé
        //TODO: Faire egalement un suppression des id de l'article si supprimer dans la table media_article
        ContainArticle::destroy($id);
        return redirect()->route('admin.articles.index');

    }


}
