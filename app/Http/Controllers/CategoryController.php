<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
class CategoryController extends Controller
{
    //fuction select all
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
    public function save(StoreCategoryRequest $request){

        $validation=$request ->validated();
        $category=new Category ;
        // $category-> name =$request -> name;
        $category-> name =$validation['name'] ;
        $category->save(); // insert data in table category
        return redirect('/catgory');
        // return $request;

    }
        // function delete 
        public function delete($id){
            // $category=Category::findOrFail($id);
            $category=Category::where('id','=',$id)->delete();
            // if($category){
            //     $category=delete();
            // }
            return redirect('/catgory');
        
        }

        
        // fuction show data by id
        public function show($id){
            $categories =Category::find($id);

            $categoriesy = Category::find($id)->Article;
           


            // foreach ($categoriesy  as $comment) {
            //     $art=[];
            // }
            return view ('category.showCategory',['category'=>$categories,'cate'=>$categoriesy]);

        }
        
        ///////
        //function edit data
        public function edit($id){
            $category = Category :: find($id);
            return view("category.updateCategory", ['category' => $category]);
        }
       public function updates($id,StoreCategoryRequest $request)
        {
            $validation=$request ->validated();
            $category =  Category :: find($id);
            $category-> update([
                'name' => $validation['name'] 

            ]);
            return redirect('/catgory');
            // return $category;
        }
 


}
