<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * @var Article
     */
    private $article;

    /**
     * ArticleController constructor.
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function index()
    {

    }

    public function show($id)
    {
        $article = $this->article->find($id);
        $novel = $article->novel;
        $next = $article->next();
        $previous = $article->previous();
        return view('articles.show')->with(
            compact('article', 'novel', 'next', 'previous')
        );
    }
}
