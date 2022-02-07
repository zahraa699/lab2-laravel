<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //fuction select
    public function list(){
        $categories=Category::all(); // select from categories
        return view ('category.list',['category'=>$categories]);

        // $name=['zahraa','zzzzzzz'];
        // return view('category.list',['x'=>$name]);
    }
    // function create
    public function create(){
        return view('category.create');
    }
    //function execute query of creation
    public function save(Request $request){

        $category=new Category ;
        $category-> name =$request -> name;
        $category->save(); // insert data in table category
        return redirect('/catgory');
        // return $request;

    }
        // function delete 
        public function delete($id){
            // $category=Category::findOrFail($id);
            $category=Category::where('id','=',$id)->get();
            if($category){
                $category=delete();
            }
            return redirect('/catgory');
        
        }
        // fuction show data by id
        public function show($id){
            $categories =Category::find($id);
            return view ('category.showCategory',['category'=>$categories]);
        }
        //function edit data
        public function edit_data($id){
            $category = Category :: find($id);
            return view("category.updateCategory", ['category' => $category]);
        }
       public function edit(Request $request)
        {
            $category =  Category :: find($request->id);
            $category-> name = $request -> name;
            $category-> save();
            return redirect('/catgory');
            // return $request;
        }
 


}
