<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
class Category extends Model
{
    use HasFactory;
    // protected $table ="categories";
    protected $fillable=['name','created_at','updated_at'];
    // protected $hidden=['created_at','updated_at'];
    public $timestamps=false;
    public function Article(){
        return $this->hasMany('App\Models\Article','cat_id','id');
    }
   
}

