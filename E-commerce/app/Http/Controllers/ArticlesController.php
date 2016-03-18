<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index()
    {
        echo "accueil view article";
    }
    public function show()
    {
        echo "accueil show article";
    }

    public function destroy($article)
    {
        //TODO: destroy selected article
    }

    public function create()
    {
        echo "je cree";
    }
}
