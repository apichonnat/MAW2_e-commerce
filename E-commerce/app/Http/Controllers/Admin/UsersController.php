<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function index()
    {
        $user = User::all();

        return view('admin/users.index', ['users' => $user->sort()]);
    }

    public function edit()
    {
        return redirect()->route('admin.users.index');
    }

    public function destroy()
    {

        return redirect()->route('admin.users.index');
    }
}
































