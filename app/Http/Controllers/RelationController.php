<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
class RelationController extends Controller
{
    public function getCategoryArticle(){
        $article= Article::ALL();
        return $article;
    }
}
