<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class OrdersController extends Controller
{
    public function index()
    {
        $orders = Session::get('idArticle', []);

        $order = Article::find($orders);


        return view('cart.index', ['orders' => $order]);

    }

    public function store(Request $order)
    {
        Session::push('idArticle', $order->idArticle);

        return redirect()->route('articles.index');
    }

    public function destroy()
    {
        Session::forget('idArticle');
        return redirect()->route('articles.index');
    }
}
