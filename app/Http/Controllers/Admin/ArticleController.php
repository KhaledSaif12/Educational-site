<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Catgory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //
    public function index(){
        $article=Article::orderBy('id','desc')->get();
        return view('admin.list_article')->with('all_article',$article);
    }


    public function create() {
        $cat =Catgory::get();
        return view('admin.addarticle')->with('cats',$cat);
        
    }
    public function store(Request $request){
    $article =new Article();
    $article->title=$request->arttitle;
    
    //$article->image=$request->artimage;
    $article->catgory_id=$request->articlecat;
    $article->content=$request->atriclecontant;
    $article->user_id=Auth::user()->id;
    $article->image=$this->uploadimage($request->file('artimage'));
    if($article->save())
    return redirect()->route('list_article');
    return redirect()->bake();


    }

    public function uploadimage($image){
        $imagname=time().'.' .$image->extension();
        $image->move(public_path('images/'),$imagname);
        return $imagname;
    }
   public function show($id){
    $article= Article::find($id);
    return response($article);

   }
}
