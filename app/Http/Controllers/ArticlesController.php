<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\ControllersController;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function index() {
      $articles = Article::latest('published_at')->latest('created_at')
      ->published()
      ->get();

      return view('articles.index',compact('articles'));
    }

    public function show($id) {
      $article = Article::findOrFail($id);

      return view('articles.show', compact('article'));
    }

    public function create(){
      return view('articles.create');
    }

    public function store(ArticleRequest $request) {

      Article::create($request->validated());
      \Flash::success('記事の作成が完了しました');
      return redirect()->route('articles.index');
    }

    public function edit($id) {
      $article = Article::findOrFail($id);
      return view('articles.edit',compact('article'));
    }

    public function update(ArticleRequest $request, $id) {
      $article = Article::findOrFail($id);
      $article->update($request->validated());
      \Flash::info('記事を編集しました。');
      return redirect()->route('articles.show',[$article->id]);
    }

    public function destroy($id) {
      $article = Article::findOrFail($id);
      $article->delete();
      \Flash::warning('記事を削除しました。');
      return redirect('articles');
    }
}
