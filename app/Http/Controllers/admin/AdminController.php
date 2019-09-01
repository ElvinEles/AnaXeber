<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\NewsCategory;

class AdminController extends Controller
{

   public function index()
   {
    return view('backend/admin_index');
   }

    public function news_add()
    {
    $news_categories=NewsCategory::all();


     return view('backend/news/news_add',["news_categories"=>$news_categories]);
    }

    public function news_all()
    {
    $news_all=News::orderBy('created_at', 'desc')->paginate(25);
    $news_categories=NewsCategory::all();

     return view('backend/news/news_all',["news_all"=>$news_all,"news_categories"=>$news_categories]);
    }

    public function news_correct($id)
    {
    $news_one=News::where('news_id',$id)->first();
    $news_categories=NewsCategory::all();

    return view('backend/news/news_correct',["news_categories"=>$news_categories,"news_one"=>$news_one]);
    }
}
