<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Article;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
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
    public function index($id)
    {
        $user = User::find($id);

        return view('User.index', [
            'user' => $user
        ]);
    }
}
