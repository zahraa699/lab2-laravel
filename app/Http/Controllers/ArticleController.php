<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreArticleRequest;
class ArticleController extends Controller
{
    //fuction select
    public function listArticle(){
        $article=Article::all();
        return view('article.artlicleList',['art'=>$article]);
    }
    // function create
    public function artcreate(){
        $catid= Category :: all();
        return view ('article.articleCreate',['catid'=>$catid]);
    }
    //function execute query of creation
    public function save(StoreArticleRequest $request){
        $validation =$request -> validated();
        $article = new Article;
        $article ->name =$validation['name'] ;
        $article ->details =$validation['details']  ;
        $article ->slug =$validation['slug'];
        $article ->is_used =$validation['is_used'];
        $article ->cat_id =$validation['cat_id'];
        // $article ->cat_id =$request ->categoeris->id;
        $article->save();
        return redirect('/art');
        // return $request;

    }
    // function delete 
    public function delete($id){
        $article=Article::where('id','=',$id)->delete();
        // if($article){
        //     $article=delete();
        // }
        return redirect('/art');
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
   public function edit(StoreArticleRequest $request)
    {
        // return $request;
        $validation =$request -> validated();
        $article  =  Article :: find($request->id);
        $article->name =$validation['name'] ;
        $article->details =$validation['details']  ;
        $article->slug =$validation['slug'];
        $article->is_used =$validation['is_used'];
        $article->cat_id =$validation['cat_id'];
        // without validation
        // $article->name =$request->name ;
        // $article->details =$request->details  ;
        // $article->slug =$request->slug;
        // $article->is_used =$request->is_used;
        // $article->cat_id =$request->cat_id;
        $article->save();
        return redirect('/art');
        // return $request;
    }
}
