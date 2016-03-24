<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function create()
    {
        return view("form/formcreateuser");
    }

    public function store()
    {
        echo "je viens de cree un user";
        echo $_POST["firstname"];
        echo $_POST["lastname"];
    }
}
