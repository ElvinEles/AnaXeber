<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\NewsCategory;


class MenuController extends Controller
{
    public function news_all_for_category($id)
    {
      $news_all_slides=News::where('news_category',$id)->orderBy('created_at', 'desc')->get();
      $news_one_category=NewsCategory::where('category_id',$id)->first();

       return view('frontend/news_for_category',["news_all_slides"=>$news_all_slides,"news_one_category"=>$news_one_category]);
    }
}
