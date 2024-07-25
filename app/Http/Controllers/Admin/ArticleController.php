<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\Catgory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('admin.list_article', ['all_article' => $articles]);
    }

    public function create() {
        $categories = Catgory::all();
        return view('admin.addarticle', ['cats' => $categories]);
    }

    public function store(Request $request) {
        $article = new Article();
        $article->title = $request->arttitle;
        $article->catgory_id  = $request->articlecat;
        $article->content = $request->atriclecontant;
        $article->user_id = Auth::user()->id;
        $article->image = $this->uploadImage($request->file('artimage'));

        if ($article->save()) {
            return redirect()->route('list_article');
        }
        return redirect()->back();
    }

    public function uploadImage($image) {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images/'), $imageName);
        return $imageName;
    }

    public function show($id) {
        $article = Article::find($id);
        return response($article);
    }

    public function edit($id) {
        $article = Article::find($id);
        $categories = Catgory::all();
        return view('admin.edit_article', ['article' => $article, 'cats' => $categories]);
    }

    public function update(Request $request, $id) {
        $article = Article::find($id);
        $article->title = $request->arttitle;
        $article->catgory_id  = $request->articlecat;
        $article->content = $request->articlecontant;

        if ($request->hasFile('artimage')) {
            $article->image = $this->uploadImage($request->file('artimage'));
        }

        if ($article->save()) {
            return redirect()->route('list_article');
        }
        return redirect()->back();
    }

    public function destroy($id) {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('list_article')->with('success', 'Article deleted successfully.');
    }
}

