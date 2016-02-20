<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Article;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
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
     * Show article page with comments
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $article = Article::find($id);

        return view('Article.article', [
            'article' => $article
        ]);
    }

    /**
     *  New article creation form
     *
     * @return Response
     */
    public function newArticle()
    {
        return view('Article.new');
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'article' => 'required',
        ]);

        $request->user()->articles()->create([
            'title' => $request->title,
            'article' => $request->article
        ]);

        return redirect('/');
    }
}
