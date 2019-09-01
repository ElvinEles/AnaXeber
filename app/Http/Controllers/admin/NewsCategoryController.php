<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Facades\Input;
use Validator;
use App\NewsCategory;


class NewsCategoryController extends Controller
{

    public function news_save(Request $request)
    {

      $news=new News();

      $news->news_title=ucwords($request->news_title);
      $news->news_content=$request->news_content;
      $news->news_category=$request->news_category;


      $news_photo_one=Input::file('news_photo_one');
      $news_photo_two=Input::file('news_photo_two');
      $news_photo_third=Input::file('news_photo_third');
      $news_video=Input::file('news_video');



      /* PHOTO 1*/
         if ($news_photo_one) {
           $image_name=rand(0,10000).$news_photo_one->getClientOriginalName();
           $destination="images";
           $news->news_photo_one=$destination."/".$image_name;
           $news_photo_one->move($destination,$image_name);
         }else {
           $news->news_photo_one="No Photo";
         }
        /* PHOTO 1*/

        /* PHOTO 2*/
           if ($news_photo_two) {
             $image_name=rand(0,10000).$news_photo_two->getClientOriginalName();
             $destination="images";
             $news->news_photo_two=$destination."/".$image_name;
             $news_photo_two->move($destination,$image_name);
           }else {
             $news->news_photo_two="No Photo";
           }
          /* PHOTO 2*/

          /* PHOTO 3*/
             if ($news_photo_third) {
               $image_name=rand(0,10000).$news_photo_third->getClientOriginalName();
               $destination="images";
               $news->news_photo_third=$destination."/".$image_name;
               $news_photo_third->move($destination,$image_name);
             }else {
               $news->news_photo_third="No Photo";
             }
            /* PHOTO 3*/

            /* Video */
               if ($news_video) {
                 $video_name=rand(0,10000).$news_video->getClientOriginalName();
                 $destination="videos";
                 $news->$news_video=$destination."/".$video_name;
                 $news_video->move($destination,$video_name);
               }else {
                 $news->news_video="No Video";
               }
              /* Video*/

          $result=$news->save();

          if ($result) {

             return redirect('/');
             //return redirect('admin/allproduct');
         }else{
             session()->put('news_error','Problem yarandı');
             return redirect()->back();
         }


    }

    public function news_delete(Request $request)
    {
      $news_id=$request->deleteNewsInput;

      $result=News::where('news_id',$news_id)->delete();

      if ($result) {
        session()->put('news_error','Xəbər silindi');
        return redirect()->back();
      }else {
        session()->put('news_error','Problem yarandı');
        return redirect()->back();
      }
    }


    public function news_edit(Request $request,$id)
    {
      $news__edit_one=News::where('news_id',$id)->first();

      $news_title=ucwords($request->news_title);
      $news_content=$request->news_content;
      $news_category=$request->news_category;

      $news_photo_one=Input::file('news_photo_one');
      $news_photo_two=Input::file('news_photo_two');
      $news_photo_third=Input::file('news_photo_third');
      $news_video=Input::file('news_video');


      /* PHOTO 1*/
         if ($news_photo_one != null) {
           $image_name=rand(0,10000).$news_photo_one->getClientOriginalName();
           $destination="images";
           $news->news_photo_one=$destination."/".$image_name;
           $news_photo_one->move($destination,$image_name);
         }else {
           $news_photo_one=$news__edit_one->news_photo_one;
         }
        /* PHOTO 1*/

        /* PHOTO 2*/
           if ($news_photo_two != null) {
             $image_name=rand(0,10000).$news_photo_two->getClientOriginalName();
             $destination="images";
             $news->news_photo_two=$destination."/".$image_name;
             $news_photo_two->move($destination,$image_name);
           }else {
             $news_photo_two=$news__edit_one->news_photo_two;
           }
          /* PHOTO 2*/

          /* PHOTO 3*/
             if ($news_photo_third != null) {
               $image_name=rand(0,10000).$news_photo_third->getClientOriginalName();
               $destination="images";
               $news->news_photo_third=$destination."/".$image_name;
               $news_photo_third->move($destination,$image_name);
             }else {
               $news_photo_third=$news__edit_one->news_photo_third;
             }
            /* PHOTO 3*/

            /* Video */
               if ($news_video != null) {
                 $video_name=rand(0,10000).$news_video->getClientOriginalName();
                 $destination="videos";
                 $news->$news_video=$destination."/".$video_name;
                 $news_video->move($destination,$video_name);
               }else {
                 $news_video=$news__edit_one->news_video;
               }
              /* Video*/


            $result=News::where('news_id',$id)->update(array(
              'news_title' =>$news_title,
              'news_content' =>$news_content,
              'news_category' =>$news_category,
              'news_photo_one' =>$news_photo_one,
              'news_photo_two' =>$news_photo_two,
              'news_photo_third' =>$news_photo_third,
              'news_video' =>$news_video
            ));

            if ($result) {

               return redirect('/news_all');
               //return redirect('admin/allproduct');
           }else{
               session()->put('news_error','Problem yarandı');
               return redirect()->back();
           }



    }


    public function news_search(Request $request)
    {


      $news_first_date=date_format(date_create($request->news_first_date),"Y-m-d");
      $news_second_date=date_format(date_create($request->news_second_date),"Y-m-d");
      $news_title=$request->news_title;
      $news_category=$request->news_category;

      $news_categories=NewsCategory::all();


      if ($news_first_date > $news_second_date) {
        session()->put('news_error_date','Başlanğıc tarix son tarixdən kiçik olmalıdır');
        return redirect()->back();
      }elseif ($news_first_date <= $news_second_date && $news_title != null || $news_category != 0) {
      ///  return "bura geldi";
        if ($news_title != null && $news_category == 0) {

          if ($news_first_date == $news_second_date) {
            $news_all=News::where([
              ['news_title','like',"%".$news_title."%"],
              ['created_at','like',"%".$news_first_date."%"]
              ])->orderBy('created_at', 'desc')->get();
              return view('backend/news/news_search',["news_all"=>$news_all,"news_categories"=>$news_categories]);
          }else {
            $news_all=News::where([
              ['news_title','like',"%".$news_title."%"],
              ['created_at','>=',$news_first_date],
              ['created_at','<=',$news_second_date]
              ])->orderBy('created_at', 'desc')->get();
              return view('backend/news/news_search',["news_all"=>$news_all,"news_categories"=>$news_categories]);
          }

        }

        if ($news_category != 0 && $news_title == null) {
            if ($news_first_date == $news_second_date) {
              $news_all=News::where([
                ['news_category','=',"$news_category"],
                ['created_at','like',"%".$news_first_date."%"]
                ])->orderBy('created_at', 'desc')->get();
                return view('backend/news/news_search',["news_all"=>$news_all,"news_categories"=>$news_categories]);
            }else {
              $news_all=News::where([
                ['news_category','=',"$news_category"],
                ['created_at','>=',$news_first_date],
                ['created_at','<=',$news_second_date]
                ])->orderBy('created_at', 'desc')->get();
                return view('backend/news/news_search',["news_all"=>$news_all,"news_categories"=>$news_categories]);
            }

        }

        if ($news_category != 0 && $news_title != null) {
          $news_all=News::where([
            ['news_title','like',"%".$news_title."%"],
            ['news_category','=',$news_category],
            ['created_at','>=',$news_first_date],
            ['created_at','<=',$news_second_date]
            ])->orderBy('created_at', 'desc')->get();
            return view('backend/news/news_search',["news_all"=>$news_all,"news_categories"=>$news_categories]);
        }



      }elseif ($news_first_date <= $news_second_date && $news_title == null || $news_category == 0) {
        $news_all=News::where([
          ['created_at','like',"%".$news_first_date."%"]
          ])->orderBy('created_at', 'desc')->get();
          return view('backend/news/news_search',["news_all"=>$news_all,"news_categories"=>$news_categories]);

      }else{

        return redirect()->back();
      }



    }
}
