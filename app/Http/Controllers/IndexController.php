<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        // retrieve or in other way prepare some data
        //                                                   2023-06-07 10:24:32
        $all_articles = Article::where('publish_at', '<=', date('Y-m-d H:i:s'))->get();

        // display the data, pass-in $all_articles
        return view('home', compact('all_articles'));
    }
}
