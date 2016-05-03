<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $list_des_trucs = Category::all();
        return view('articles.create', ['list_des_trucs' => $list_des_trucs]);
    }


    public function store(Request $data)
    {

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
