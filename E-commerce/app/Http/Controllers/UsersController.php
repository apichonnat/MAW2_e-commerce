<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function create()
    {
        return view("users/create");
    }

    public function store(Request $request)
    {
        $addresse = new Address();

        $addresse->street = $request->rue;
        $addresse->nb_street = $request->numrue;
        $addresse->city = $request->ville;
        $addresse->npa = $request->npa;

        $addresse->save();

        $user = new User();

        $user->first_name = $request->firstname;
        $user->last_name = $request->lastname;
        $user->mail = $request->mail;
        $user->pseudo = $request->pseudo;
        $user->address_id = $addresse->id;
        $user->save();


        return view("home");
    }
}
































