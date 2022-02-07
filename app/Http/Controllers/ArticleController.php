<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    //fuction select
    public function listArticle(){
        $article=Article::all();
        return view('article.artlicleList',['art'=>$article]);
    }
    // function create
    public function artcreate(){
        return view ('article.articleCreate');
    }
    //function execute query of creation
    public function save(Request $request){
        $article = new Article;
        $article ->name =$request ->name ;
        $article ->details =$request ->details  ;
        $article ->slug =$request ->slug;
        $article ->is_used =$request ->is_used;
        $article ->cat_id =$request ->cat_id;
        $article->save();
        return redirect('/art');
        // return $request;

    }
    // function delete 
    public function delete($id){
        $article=Article::where('id','=',$id)->get();
        if($article){
            $article=delete();
        }
        return redirect('/catgory');
    }
     // fuction show data by id
     public function show($id){
        $article =Article::find($id);
        return view ('article.showArticle',['art'=>$article]);
    }

     //function edit data
     public function edit_data($id){
        $article  = Article :: find($id);
        return view("article.updateArticle", ['art' => $article ]);
    }
   public function edit(Request $request)
    {
        $article  =  Article :: find($request->id);
        $article ->name =$request ->name ;
        $article ->details =$request ->details  ;
        $article ->slug =$request ->slug;
        $article ->is_used =$request ->is_used;
        $article ->cat_id =$request ->cat_id;
        $article->save();
        return redirect('/art');
        // return $request;
    }
}
