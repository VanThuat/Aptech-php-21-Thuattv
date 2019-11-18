<?php

namespace App\Http\Controllers;

use App\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=article::get();
        return view('index',['articles'=>$article]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article= New article;
        $article->title = $request->title;
        $article->title_slug = $request->title_slug;
        $article->description = $request->description;
        $article->content = $request->content;
        $article->save();
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        return view('show',['article'=>$article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        return view('edit', ['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, article $article)
    {
        $article = article::find($article->id);
        $article->title = $request->title;
        $article->title_slug = $request->title_slug;
        $article->description = $request->description;
        $article->content = $request->content;
        $article->save();
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        $article = article::find($article->id);
        $article->delete();
        return redirect()->route('article.index');
    }
}
