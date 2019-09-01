<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\NewsCategory;

class HomeController extends Controller
{
    public function index()
    {

      $news_all_slides=News::orderBy('created_at', 'desc')->skip(1)->take(10)->get();
      $news_categories=NewsCategory::all();

       return view('index',["news_all_slides"=>$news_all_slides,"news_categories"=>$news_categories]);

    }

    public function news_one_info($id)
    {

      $news_one_info=News::where('news_id',$id)->first();
      $news_one_category=NewsCategory::where('category_id',$news_one_info->news_category)->first();
     return view('frontend/news_single_info',["news_one_info"=>$news_one_info,"news_one_category"=>$news_one_category]);
    }
}
