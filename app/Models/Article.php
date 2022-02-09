<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Article extends Model
{
    use HasFactory;
    // protected $table ="articles";
    protected $fillable=['name','details','slug','is_used','cat_id','created_at','updated_at'];
    // protected $hidden=['created_at','updated_at'];
    public $timestamps=false;
    public function categoeris(){
        // return $this ->belongsTo(Category::class);
        return $this -> belongsTo(Category::class,'cat_id','id');
    }
}
