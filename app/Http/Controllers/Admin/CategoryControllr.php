<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Catgory;
use Illuminate\Http\Request;

class CategoryControllr extends Controller
{
    //
    public function index(){
        $catgory =Catgory::get();
        return view('admin.list_Category')->with('all_category',$catgory);
    }

    public function create(){
        $main_cate =Catgory::select('id','name')->where('parent',0)->get();
        return view('admin.new_category')->with('cats',$main_cate);
    } 


    public function store(Request $request){
        $catgory = new Catgory();
        $catgory->name=$request->name;
        $catgory->description=$request->description;
        $catgory->parent=$request->parent;
        $catgory->user_id=Auth::user()->id;
     
        if($catgory->save())
        return redirect()->route('all_category');
 
        return redirect()->pack();

    }
}
