@extends('backend/admin_index')


@section('title')
XƏBƏRƏ DÜZƏLİŞ
@endsection


@section('warning_message')
@if(session()->has('news_error'))
<h3 class="warning_message_session">
<?php echo session()->get('news_error');
session()->remove('news_error');
?></h3>
@endif

@endsection

@section('content')
<div class="col-md-12">
    <form role="form" method="post" action="{{URL::to('news/edit/'.$news_one->news_id)}}" enctype='multipart/form-data'>
      {{ csrf_field() }}
        <div class="form-group">
            <label>Xəbər başlığı*:</label>
            <span hidden class="warning_message">Xüsusi işarələrdən istifadə etməyin</span>
            <input name="news_title" value="{{$news_one->news_title}}" autocomplete="off" id="news_title" class="form-control" />
        </div>



        <div class="form-group">
            <label>Xəbər kateqoriyası*:</label>
            <select class="form-control" id="news_category" name="news_category">
              <?php
               $news_category_one = DB::table('category_of_news')->where('category_id', $news_one->news_category)->first();
               ?>
              <option value="{{$news_category_one->category_id}}">{{$news_category_one->category_name}}</option>
              @foreach ($news_categories as $news_category)
              <option value="{{$news_category->category_id}}">{{$news_category->category_name}}</option>
              @endforeach
            </select>
        </div>

       <div class="row">
         <div class="form-group">
           <div style="padding-top:40px;" class="col-md-6">
             <label>Şəkil 1*:</label>
             <input type="file" value="{{$news_one->news_photo_one}}" class="form-control" name="news_photo_one"/>
           </div>
           <div class="col-md-6">
             @if($news_one->news_photo_one != "No Photo")
            <img class="pull-right" style="width:200px;height:160px;padding:10px;" src="{{asset('/'.$news_one->news_photo_one)}}" alt="ŞƏKİL YOXDUR">
             @endif
           </div>
         </div>
       </div>

       <div class="row">
         <div class="form-group">
           <div style="padding-top:40px;" class="col-md-6">
             <label>Şəkil 2*:</label>
             <input type="file" value="{{$news_one->news_photo_two}}" class="form-control" name="news_photo_two"/>
           </div>
           <div class="col-md-6">
             @if($news_one->news_photo_two != "No Photo")
            <img class="pull-right" style="width:200px;height:160px;padding:10px;" src="{{asset('/'.$news_one->news_photo_two)}}" alt="ŞƏKİL YOXDUR">
             @endif
           </div>
         </div>
       </div>

       <div class="row">
         <div class="form-group">
           <div style="padding-top:40px;" class="col-md-6">
             <label>Şəkil 3*:</label>
             <input type="file" value="{{$news_one->news_photo_third}}" class="form-control" name="news_photo_third"/>
           </div>
           <div class="col-md-6">
             @if($news_one->news_photo_third != "No Photo")
            <img class="pull-right" style="width:200px;height:160px;padding:10px;" src="{{asset('/'.$news_one->news_photo_third)}}" alt="ŞƏKİL YOXDUR">
             @endif
           </div>
         </div>
       </div>

       <div class="row">
         <div class="form-group">
           <div style="padding-top:40px;" class="col-md-6">
             <label>Video*:</label>
             <input type="file" class="form-control" value="{{$news_one->news_video}}" name="news_video"/>
           </div>
           <div class="col-md-6">
             @if($news_one->news_photo_third != "No Photo")
            <img class="pull-right" style="width:200px;height:160px;padding:10px;" src="{{asset('/'.$news_one->news_video)}}" alt="ŞƏKİL YOXDUR">
             @endif
           </div>
         </div>
       </div>


        <div style="margin-top:20px;" class="form-group">
          <label>Mətn*:</label>
          <textarea name="news_content" id="news_content" rows="10" cols="80">
           {{$news_one->news_content}}
          </textarea>
        </div>

        <div class="form-group">
          <button type="submit"    class="btn btn-primary btn-block">Təsdiq et</button>
          <button type="reset" class="btn btn-danger btn-block">Yenilə</button>
        </div>

    </form>
    <br />

</div>


@endsection
