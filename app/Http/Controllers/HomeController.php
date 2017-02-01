<?php

namespace App\Http\Controllers;

use App\Article;
use EasyWeChat\Foundation\Application;
use Validator;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function createArticle()
    {
        return view('article.create');
    }

    public function createArticleHandler(Request $request)
    {
        Article::create($request->all());
        dd($request->all());
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|min:3|max:255',
            'image' => 'required',
            'content' => 'required',
        ]);
    }

    public function articleList()
    {
        $articles = Article::all();
        return view('article.list', compact('articles'));
    }

    public function editArticle(Request $request)
    {

    }

    public function deleteArticle(Request $request)
    {
        Article::destroy($request->id);
    }

    public function publishArticle()
    {
        $cfg = [
            'app_id' => 'wx3db2aee0760bd36a',
            'secret' => '8f0470faa641cb07ed9273092c095587',
            'token'  => 'smallbaby',

            'debug'  => true,
            'log'    => [
                'level' => 'debug',
            ]
        ];

        $app= new Application($cfg);
        $broadcast = $app->broadcast;
        $broadcast->sendText("大家好！欢迎使用 EasyWeChat。");
    }
}
