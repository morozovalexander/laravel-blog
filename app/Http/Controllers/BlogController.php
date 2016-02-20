<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display all records
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::all()->all();

        return view('index', [
            'articles' => $articles
        ]);
    }
}
